
    let currentTab = 0;
    showTab(currentTab);

    function showTab(n) {
        const steps = document.getElementsByClassName("step");
        steps[n].classList.add("active");
        const progress = (n / (steps.length - 1)) * 100;
        // document.querySelector(".progress-bar").style.width = progress + "%";
        document.querySelector(".custom-progress-bar").style.width = progress + "%";

        document.getElementById("prevBtn").style.display = n === 0 ? "none" : "inline";
        document.getElementById("nextBtn").innerText = n === steps.length - 1 ? "Submit" : "Next";
    }

    function nextPrev(n) {
        const steps = document.getElementsByClassName("step");
        if (n === 1 && !validateForm()) return;

        steps[currentTab].classList.remove("active");
        currentTab += n;

        if (currentTab >= steps.length) {
            // Soumettre le formulaire quand la dernière étape est atteinte
            document.getElementById("site-generator-form").submit();
            return;
        }
        showTab(currentTab);
    }

    function validateForm() {
        let valid = true;
        const inputs = document.querySelectorAll(".step.active input, .step.active textarea");
        inputs.forEach(input => {
            if (input.value.trim() === "") {
                input.classList.add("invalid");
                valid = false;
            } else {
                input.classList.remove("invalid"); // Remove invalid class if valid
            }
        });
        return valid;
    }
document.querySelectorAll('.template-preview').forEach(img => {
    img.addEventListener('click', function () {
        const selectedTemplate = this.dataset.template;
        document.getElementById('template-preview-frame').src = `/templateviews/${selectedTemplate}`;
        document.querySelectorAll('.template-preview').forEach(template => template.classList.remove('selected'));
        this.classList.add('selected');
        document.getElementById('template_type').value = selectedTemplate;
    });
});

  document.addEventListener('DOMContentLoaded', () => {
    // ... (your existing code for template loading, etc.) ...

    const fileInputHidden = document.querySelector("#screenshoot");
    const fileTriggerInput = document.querySelector(".selectImage");
    const imageArea = document.querySelector(".imgArea");
    const uploadInstructions = imageArea.querySelector(".upload-instructions");
    const uploadInstructionsID = document.getElementById("upload-instructions");

    const fileTypes = [
        "image/apng",
        "image/bmp",
        "image/gif",
        "image/jpeg",
        "image/pjpeg",
        "image/png",
        "image/svg+xml",
        "image/tiff",
        "image/webp",
        "image/x-icon",
        "image/avif",
    ];

    function validFileType(file) {
        return fileTypes.includes(file.type);
    }

    fileTriggerInput.addEventListener("click", function () {
        fileInputHidden.click();
    });

    fileInputHidden.addEventListener("change", function (e) {
        const image = e.target.files[0];
        if (!image) return;

        if (!validFileType(image)) {
            alert("Type de fichier invalide. Veuillez uploader une image.");
            return;
        }

        if (image.size > 2097152) {
            alert("La taille de l'image doit être inférieure à 2MB");
            return;
        }

        const reader = new FileReader();

        const existingImgs = imageArea.querySelectorAll('img');
        existingImgs.forEach(existingImg => existingImg.remove());

        reader.onload = function (e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.style.maxWidth = '100%';
            img.style.maxHeight = '150px';
            img.style.borderRadius = '6px';
            img.style.objectFit = 'contain';
            img.style.display = 'block';

            const existingImgs = imageArea.querySelectorAll('img');
            existingImgs.forEach(existingImg => existingImg.remove());

            imageArea.appendChild(img);

            uploadInstructions.style.visibility = 'hidden';

            imageArea.classList.add('active');
        };

        reader.readAsDataURL(image);
    });

    // Gestion du drag and drop
    imageArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        imageArea.classList.add('dragover');
    });

    imageArea.addEventListener('dragleave', () => {
        imageArea.classList.remove('dragover');
    });

    imageArea.addEventListener('drop', (e) => {
        e.preventDefault();
        imageArea.classList.remove('dragover');

        if (e.dataTransfer.files.length) {
            fileInputHidden.files = e.dataTransfer.files;
            const event = new Event('change');
            fileInputHidden.dispatchEvent(event);
        }
    });

    // Nouveau code pour le clic sur l'icône d'oeil
    const previewEyeIcon = document.querySelector('.fa-eye');
    previewEyeIcon.addEventListener('click', function() {
        const selectedTemplate = document.getElementById('template_type').value;
        if (selectedTemplate) {
          
            window.location.href = `/templateviews/${selectedTemplate}`;
            
        } else {
            alert('Veuillez choisir un template avant de voir l\'aperçu.');
        }
    });
});