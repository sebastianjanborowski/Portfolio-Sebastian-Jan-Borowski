document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('generateInputsButton').addEventListener('click', function() {
        const container = document.getElementById('inputs');
        container.innerHTML = `
            <label for="widthInput">Szerokość (moduły):</label>
            <input type="number" id="widthInput" min="0.5"><br/>
            <label for="heightInput">Wysokość (moduły):</label>
            <input type="number" id="heightInput" min="0.5"><br/>
            <label for="descriptionInput">Opis:</label>
            <input class="description-input x" type="text" id="descriptionInput"><br/>
            <button id="generateBlockButton">Generuj Blok</button>
        `;
    });

    document.getElementById('inputs').addEventListener('click', function(e) {
        if (e.target.id === 'generateBlockButton') {
            var width = parseFloat(document.getElementById('widthInput').value);
            var height = parseFloat(document.getElementById('heightInput').value);
            width = width*110;
            height = height*67;
            const description = document.getElementById('descriptionInput').value;
            const blockContainer = document.getElementById('generatedBlock');

            if (width > 0 && height > 0) {
                const newBlock = document.createElement('div');
                newBlock.className = 'klocek';
                newBlock.style.width = `${width}px`;
                newBlock.style.height = `${height}px`;
                newBlock.style.backgroundColor = getRandomColor();
                newBlock.style.position = 'absolute';
                newBlock.style.left = '10px';
                newBlock.style.top = '200px';

                const descriptionInput = document.createElement('input');
                descriptionInput.type = 'text';
                descriptionInput.value = description;
                descriptionInput.className = 'description-input';

                const saveButton = document.createElement('button');
                saveButton.textContent = 'Zapisz';

                saveButton.addEventListener('click', function() {
                    const descriptionText = document.createElement('div');
                    descriptionText.textContent = descriptionInput.value;
                    newBlock.innerHTML = '';
                    newBlock.appendChild(descriptionText);
                });

                newBlock.appendChild(descriptionInput);
                newBlock.appendChild(saveButton);
                blockContainer.appendChild(newBlock);

                makeDraggable(newBlock);
            } else {
                alert('Proszę wpisać poprawne wartości dla szerokości i wysokości.');
            }
        }
    });

    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
});