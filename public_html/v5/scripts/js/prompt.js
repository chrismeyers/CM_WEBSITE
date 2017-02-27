/* 
    Document   : prompt.js
    Created on : Feb 25, 2017
    Author     : Chris Meyers
    Description:
        Handles the functionality of the hidden prompt.
          - The prompt can be opened by pressing the '~' key
            when the website is using csselements.css.
*/

function processPromptInput(input) {
    var sanitizedInput = input.trim().toLowerCase().replace(/ +(?= )/g,'');
    if(sanitizedInput === "") {
        $("#prompt").val("");
        return;
    }

    var parts = sanitizedInput.split(' ');

    $("#prompt").val('');
    promptHistory.push(input);

    switch(parts[0]) {
        case "cd": {
            switch(parts[1]) {
                case "resume":
                  showSection('my-resume'); break;
                case "builds":
                  showSection('my-builds'); break;
                case "projects":
                    showSection('my-projects'); break;
                case "contact":
                    showSection('contact-me'); break;
                default:
                    showSection('about-me'); break;
            }
            break;
        }
        case "history": {
            showHistory(true);
            return;
        }
        case "echo": {
            window.alert(input.substring(input.indexOf(' ') + 1));
            break;
        }
        case "clear": {
            $('#prompt-textarea').empty();
            promptHistory = [];
            return;
        }
        case "close": {
            if(isIdShown('prompt-textarea')) {
                hidePromptTextarea();
            }
            break;
        }
        case "help":
        case "?":
        case "man": {
            if(!isIdShown('prompt-textarea')) {
                showPromptTextarea();
            }
            printHelpMessage();
            return;
        }
        case "exit": {
            handlePromptDisplay();
            break;
        }
        default:
            return;
    }

    if(isIdShown('prompt-textarea')) {
        showHistory(true);
    }
}

function movePromptCursorToEnd() {
    var promptTextbox = document.getElementById("prompt");
    var promptLength = promptTextbox.value.length;

    promptTextbox.focus();
    promptTextbox.setSelectionRange(promptLength, promptLength);
}

function showHistory(fromText) {
    $('#prompt-textarea').empty();

    if(isIdShown('prompt-textarea') && !fromText) {
        hidePromptTextarea();
    }
    else {
        showPromptTextarea();
    }

    for(i = 0; i < promptHistory.length; i++) {
        $('#prompt-textarea').append(promptHistory[i]);
        if(i !== (promptHistory.length - 1)) {
            $('#prompt-textarea').append("\n");
        }
    }

    $('#prompt-textarea').scrollTop($('#prompt-textarea')[0].scrollHeight);

    if(!fromText) {
        movePromptCursorToEnd();
    }
}

function handlePromptDisplay() {
    if(isIdShown('prompt-div')) {
        hidePromptTextarea();
        $('#prompt-div').css('display', 'none');
    }
    else {
        $('#prompt-div').css('display', 'flex');
        movePromptCursorToEnd();
    }
}

function showPromptTextarea() {
    $('#prompt-textarea').css('display', 'flex');
    $('#prompt-textarea-btn').html("&#9660;"); // down symbol
}

function hidePromptTextarea() {
    $('#prompt-textarea').css('display', 'none');
    $('#prompt-textarea-btn').html("&#9650;"); // up symbol
}

function printHelpMessage() {
    $('#prompt-textarea').empty();

    var msg = "===== Command Prompt Help =====                 \n";
    msg +=    "The following commands are available:           \n";
    msg +=    "  cd [section] - displays the specified section.\n";
    msg +=    "  history - displays the prompt textarea.       \n";
    msg +=    "  echo [text] - raises alert window with text.  \n";
    msg +=    "  clear - clears prompt textarea and history.   \n";
    msg +=    "  close - lowers the prompt textarea, if shown. \n";
    msg +=    "  exit - closes the prompt.                     \n";
    msg +=    "  help - displays this message.                 ";

    $('#prompt-textarea').append(msg);
    $('#prompt-textarea').scrollTop(0);
}
