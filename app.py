from flask import Flask, request, send_file, jsonify
import torch
from diffusers import StableDiffusionPipeline
import os
from flask_cors import CORS
import hashlib  # To create a unique filename based on user input

app = Flask(__name__)
CORS(app)

# Load Stable Diffusion Model
model_id = "CompVis/stable-diffusion-v1-4"
device = "cuda" if torch.cuda.is_available() else "cpu"
pipe = StableDiffusionPipeline.from_pretrained(
    model_id, torch_dtype=torch.float16 if device == "cuda" else torch.float32
)
pipe = pipe.to(device)

# Enable optimizations
pipe.enable_attention_slicing()
#pipe.enable_sequential_cpu_offload()

# Create a folder to store cached images
CACHE_FOLDER = "cached_images"
os.makedirs(CACHE_FOLDER, exist_ok=True)


@app.route('/generate', methods=['POST'])
def generate_image():
    try:
        # Get user input
        data = request.get_json()
        bedrooms = int(data.get("bedrooms", "0"))
        bathrooms = int(data.get("bathrooms", "0"))
        kitchen = int(data.get("kitchen", "0"))

        # Validate input
        if bedrooms <= 0 or bathrooms <= 0 or kitchen <= 0:
            return jsonify({"error": "Invalid input. Bedrooms, bathrooms, and kitchens must be greater than 0."}), 400

        # Create a unique filename using a hash
        input_string = f"{bedrooms}-{bathrooms}-{kitchen}"
        filename = hashlib.md5(input_string.encode()).hexdigest() + ".png"
        image_path = os.path.join(CACHE_FOLDER, filename)

        # Check if image already exists
        if os.path.exists(image_path):
            print("Returning cached image")
            return send_file(image_path, mimetype="image/png")

        # Convert input numbers to a meaningful prompt
        prompt = f"A top-down 2D architectural floor plan with exactly {bedrooms} bedrooms, {bathrooms} bathrooms, and {kitchen} kitchens. Each bedroom should have a clear label 'Bedroom' and be visibly separated by walls. The layout should be clear and professional, drawn in blueprint style."

        # Generate new image
        image = pipe(prompt, height=512, width=512).images[0]

        # Save the generated image
        image.save(image_path)

        print("Generated new image")

        # Return the generated image
        return send_file(image_path, mimetype="image/png")

    except ValueError:
        return jsonify({"error": "Invalid input. Please enter valid numbers for bedrooms, bathrooms, and kitchens."}), 400
    except Exception as e:
        return jsonify({"error": str(e)}), 500



if __name__== '__main__':
    app.run(debug=True)
