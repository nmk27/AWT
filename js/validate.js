function validate() {
    let username = document.getElementById('regno').value;
    let pass = document.getElementById('password').value;
    if (username === "201900128") {
        if (pass === "ggwp") {
            document.querySelector('form').setAttribute("action", "home.php");
        }
        else
            alert("Wrong Details");
    }
    else
        alert("Wrong Details");
}