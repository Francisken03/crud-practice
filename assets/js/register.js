document.getElementById('btnReg').addEventListener('click', () => {
    var sFname = document.getElementById('firstName').value;
    var sLname = document.getElementById('lastName').value;
    var sEmail = document.getElementById('email').value;
    var sPass = document.getElementById('password').value;

    var objCred = {
        fName: sFname,
        lName: sLname,
        email: sEmail,
        pass: sPass
    }

})