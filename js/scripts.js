const orderform = document.querySelector("#order-form");
const lblResponse = document.querySelector("#response-message");
const spinner = document.querySelector("#spinner");

if (orderform) {
    orderform.onsubmit = async (e) => {
        e.preventDefault();

        // show spinner
        spinner.classList.remove("hide");

        const response = await fetch('/php/order.php', {
            method: 'POST',
            body: new FormData(orderform)
        });

        let result = await response.json();

        let message = "";

        if (typeof result.message === "object") {
            message += "<label class='error-label'>Errors: </label>";
            for (const key in result.message) {
                message += "&nbsp;" + result.message[key] + ",";
            }
            message = message.slice(0, -1);
        } else {
            message = result.message;
        }

        const clientname = document.getElementsByName("name")[0].value;

        if (result.type === "success") {
            const output = '<br><br><div class="success"><div class="alert alert-success">Hi ' + clientname + ', thank you for your order, we will contact you soon.</div></div>';
            $("#contact_form input[required=true], #contact_form textarea[required=true]").val('');
            $("#contact_form .form-group").slideUp();
            $("#contact_form #contact_results").hide().html(output).slideDown();
        } else {
            lblResponse.innerHTML = message;
            lblResponse.className = '';
            lblResponse.classList.add(result.type);
        }

        // hide spinner
        spinner.classList.add("hide");
    };


    const subscribeform = document.querySelector("#subscribe-form");
    const subscribeResponse = document.querySelector("#subscribe-response");

    subscribeform.onsubmit = async (e) => {
        e.preventDefault();

        const response = await fetch('/php/subscribe.php', {
            method: 'POST',
            body: new FormData(subscribeform)
        });

        let result = await response.json();
        let message = "";

        if (result.type === "success") {

        }

        subscribeResponse.innerHTML = result.message['email'];
        subscribeResponse.className = '';
        subscribeResponse.classList.add(result.type);
    };
}


const loginform = document.querySelector("#login-form");

if (loginform) {
    loginform.onsubmit = async (e) => {
        e.preventDefault();

        const response = await fetch('/php/admin.php', {
            method: 'POST',
            body: new FormData(loginform)
        });

        let result = await response.json();
        let message = "";

        if (result.type === "success") {
            window.location.reload();
        }
    };
}

const copylist = document.querySelector("#btnCopyList");

if (copylist) {
    copylist.addEventListener("click", fnCopyList);
}

function fnCopyList() {

    let copyText = document.getElementById("maillist");

    /* Select the text field */
    //copyText.select();
  //  copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);

    /* Alert the copied text */
    alert("Mails copied: " + copyText.value);
}
