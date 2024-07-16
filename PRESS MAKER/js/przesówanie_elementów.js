function makeDraggable(element) {
    let isDragging = false;
    let offsetX, offsetY;

    element.addEventListener('mousedown', function(e) {
        isDragging = true;
        const rect = element.getBoundingClientRect();
        offsetX = e.clientX - rect.left;
        offsetY = e.clientY - rect.top;
    });

    document.addEventListener('mousemove', function(e) {
        if (isDragging) {
            const x = e.clientX - offsetX;
            const y = e.clientY - offsetY;
            element.style.left = `${x}px`;
            element.style.top = `${y}px`;
        }
    });

    document.addEventListener('mouseup', function() {
        isDragging = false;
    });
}