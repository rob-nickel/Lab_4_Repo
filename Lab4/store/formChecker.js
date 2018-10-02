function validate() {
        let username = document.getElementById("name").value;
        let password = document.getElementById("password").value;
        let babyNum = document.getElementById("baby").value;
        let neckNum = document.getElementById("necklace").value;
        let cakeNum = document.getElementById("cake").value;
        let ship1 = document.getElementById("ship1").checked;
        let ship2 = document.getElementById("ship2").checked;
        let ship3 = document.getElementById("ship3").checked;

        if (!(username.includes("@") && username.includes("."))){
                alert("Username must be in the form of an email address");
                return false;
        }
        else if (password.length < 1){
                alert("Must include a password");
                return false;
        }
        else if ((babyNum == "") || (neckNum == "") || (cakeNum == "")){
                alert("Can't leave quantity blank");
                return false;
        }
        else if ((babyNum < 0) || (neckNum < 0) || (cakeNum < 0)){
                alert("Must include positive quantities");
                return false;
        }
        else if (!(ship1 || ship2 || ship3)){
                alert("Must select a shipping option");
                return false;
        }
        return true;
}
