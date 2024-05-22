


function handleKeyDown(event, currentFieldId, currentCheckId) {
    console.log("Key pressed:", event.key);

    // Example: If the 'ArrowDown' key is pressed, move to the next field
    if (event.key === 'ArrowDown') {
        event.preventDefault();  // Prevent the default behavior of the arrow key

        // Ensure that currentFieldId is a string
        let currentId = String(currentFieldId);
        let currentId2 = String(currentCheckId);

        // Get the numeric part of the current field's id
        let match = currentId.match(/\d+/);
        let match2 = currentId2.match(/\d+/);
        let currentNum = match ? parseInt(match[0]) : null;
        let currentCheck = match2 ? parseInt(match2[0]) : null;

        if (currentNum !== null) {
            // Calculate the next field's id
            let nextId = currentId.replace(currentNum, currentNum + 1);
            let nextId2 = currentId2.replace(currentCheck, currentCheck + 1);

            // Check if the next field exists
            let nextField = document.getElementById(nextId);
            if (nextField) {
                // Focus on the next field
                nextField.focus();

                // Check the corresponding checkbox if it exists
                let nextCheckbox = document.getElementById(nextId2);
                if (nextCheckbox) {
                    nextCheckbox.checked = true;
                }
            }
        }
    }
}


function handleKeyUp(event, currentFieldId, currentCheckId) {
    console.log("Key released:", event.key);

    // Example: If the 'ArrowUp' key is released, move to the previous field
    if (event.key === 'ArrowUp') {
        event.preventDefault();  // Prevent the default behavior of the arrow key

        // Ensure that currentFieldId is a string
        let currentId = String(currentFieldId);
        let currentId2 = String(currentCheckId);

        // Get the numeric part of the current field's id
        let match = currentId.match(/\d+/);
        let match2 = currentId2.match(/\d+/);
        let currentNum = match ? parseInt(match[0]) : null;
        let currentCheck = match2 ? parseInt(match2[0]) : null;

        if (currentNum !== null && currentNum > 1) {
            // Calculate the previous field's id
            let prevId = currentId.replace(currentNum, currentNum - 1);
            let prevId2 = currentId2.replace(currentCheck, currentCheck - 1);

            // Check if the previous field exists
            let prevField = document.getElementById(prevId);
            if (prevField) {
                // Focus on the previous field
                prevField.focus();

                // Check the corresponding checkbox if it exists
                let prevCheckbox = document.getElementById(prevId2);
                if (prevCheckbox) {
                    prevCheckbox.checked = true;
                }
            }
        }
    }
}



    function checking(checkId) {
        let checkId1 = String(checkId);
        let temp = document.getElementById(checkId1);
    
        // Toggle the checked state
        temp.checked = temp.checked;
    
        // Update the value based on the checked state
        temp.value = temp.checked ? "1" : "0";
    
        // Call your loading function
        // if (temp.checked) {
        //     console.log(temp.value);
        //     loading();
        // } else {
        //     console.log(temp.value);
        //     loading2();
        // }
    }
    
    // function loading() {
    //     // Your loading logic when checkbox is checked
    //     console.log("Checkbox checked");
    // }
    
    // function loading2() {
    //     // Your loading logic when checkbox is unchecked
    //     console.log("Checkbox unchecked");
       
    // }
    

