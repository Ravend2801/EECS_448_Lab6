function validate(event) {
    // This is all able to be done by html attributes, but here is some checking just in case
    
    event.preventDefault();
    
    let message = document.getElementById("message");
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    if (username.length == 0) {
        message.innerText = "Username is empty.";
        return;
    }
    if (password.length == 0) {
        message.innerText = "Password is empty.";
        return;
    }

    // It's not actually possible to catch all email's with regex, but this will do for now.
    let re = /[a-zA-Z0-9\.]+@[a-zA-Z0-9\.]+/;

    if (!re.test(username)) {
        message.innerText = "Username is empty.";
        return;
    }
    
    let shipping = null;
    let shippingOptions = document.getElementsByName("shipping");
    
    for (let i = 0; i < 3; i++) {
        if (shippingOptions[i].checked) {
            shipping = shippingOptions;
        }
    }
    if (shipping == null) {
        message.innerText = "Must pick a shipping option.";
        return;
    }

    let figure1 = document.getElementsByName("figure1")[0].value;
    let figure2 = document.getElementsByName("figure2")[0].value;
    let figure3 = document.getElementsByName("figure3")[0].value;

    if (figure1.length == "" || cube1 < 0) {
        message.innerText = "Enter a quantity for the Satoru Gojo Figure: ";
        return;
    }

    if (figure2.length == "" || cube2 < 0) {
        message.innerText = "Enter a quantity for the Suguru Geto Figure: ";
        return;
    }

    if (figure3.length == "" || cube3 < 0) {
        message.innerText = "Enter a quantity for the Sukuna Figure: ";
        return;
    }

    document.getElementById("storeForm").submit();
}