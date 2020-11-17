function checkForm() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let textbook = document.getElementById("book").value;
    let hoodie = document.getElementById("hoodie").value;
    let code = document.getElementById("code").value;
    let shippingOption1 = document.getElementById("shippingOption1").checked;
    let shippingOption2 = document.getElementById("shippingOption2").checked;
    let shippingOption3 = document.getElementById("shippingOption3").checked;

    if (!(username.includes("@") && username.includes("."))) {
        alert("Please enter valid address");
        return false;
    }

    if (password.length == 0) {
        alert("Enter Password!");
        return false;
    }

    if ((textbook == "") || (hoodie == "") || (code == "")) {
        alert("Quantity must be filled!");
        return false;
    }

    if ((textbook < 0) || (hoodie < 0) || (code < 0)) {
        alert("Can't Order a negative amount!");
        return false;
    }

    if (!(shippingOption1 || shippingOption2 || shippingOption3)) {
        alert("Please select a shipping option");
        return false;
    }
    return true;
}