const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

$(document).ready(function(){

    let codeEditorElement = $(".codemirror-textarea")[0];
    let editor = CodeMirror.fromTextArea(codeEditorElement, {
       // mode: "application/x-httpd-php",
       mode: "javascript",
        lineNumbers: true,
        matchBrackets: true,
        theme: "material",
        lineWiseCopyCut: true,
        styleActiveLine: true,
        extraKeys: {
            "F11": function(cm) {
              cm.setOption("fullScreen", !cm.getOption("fullScreen"));
            },
            "Esc": function(cm) {
              if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
            }
          },
        undoDepth: 200            
      });
    editor.setSize("100%","100%") // Width, Height of editor 

});

