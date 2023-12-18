    const copyButton = document.querySelector("#copy-hash");
    const inputCode = document.querySelector("#hash-pwd");
    const pasteCode = document.querySelector("#info"); 
         
    copyButton.addEventListener("click", () => {
        navigator.clipboard.writeText(inputCode.value);
        pasteCode.innerHTML ="<span class=\"msg-info\">Hash password successfully copied to the clipboard!</span>";           
    });

