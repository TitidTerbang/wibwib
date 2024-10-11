function addNewItem() {
    const newItemInput = document.getElementById("newItemInput");
    const newItemText = newItemInput.value.trim();

    if (newItemText !== "") {
        const listItems = document.getElementById("listItems");
        const newListItem = document.createElement("li");


        newListItem.innerHTML = `
            <span>${newItemText}</span>
            <button onclick="editItem(this)">Edit</button>
            <button onclick="deleteItem(this)">Hapus</button>
        `;

        listItems.appendChild(newListItem);
        newItemInput.value = ""; // Clear input field
    }
}


function deleteItem(button) {
    const listItem = button.parentNode;
    listItem.remove();
}


function editItem(button) {
    const listItem = button.parentNode;
    const span = listItem.querySelector("span");
    const currentText = span.textContent;

    const input = document.createElement("input");
    input.type = "text";
    input.value = currentText;


    listItem.insertBefore(input, span);
    listItem.removeChild(span);


    button.textContent = "Simpan";
    button.onclick = function() {
        const newText = input.value.trim();
        if (newText !== "") {
            const newSpan = document.createElement("span");
            newSpan.textContent = newText;
            listItem.insertBefore(newSpan, input);
            listItem.removeChild(input);

            button.textContent = "Edit";
            button.onclick = function() {
                editItem(this);
            };
        }
    };
}