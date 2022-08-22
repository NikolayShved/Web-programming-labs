function valid(form) {

    var isNotValid = false;

    var name = form.name.value;
    var email = form.email.value;
    var password = form.password.value;
    var RePassword = form.RePassword.value;
    var state = form.state.value;

    var adr_parrent_for_email = /[0-9a-z_]+@[0-9a-z_-]+\.[a-z]{2,5}/i;

    if (name == "" || name == " ") {
        isNotValid = "Вы не ввели своё имя";
    }
    if (name.length < 7) {
        isNotValid = "Имя должно быть не менее 7 символов";
    }
    else if (email == "") {
        isNotValid = "Вы не ввели email";
    }
    else if (adr_parrent_for_email.test(email) == false) {
        isNotValid = "Вы ввели email неправильно";
    }
    else if (password == "") {
        isNotValid = "Вы не ввели пароль";
    }
    else if (password.length < 8) {
        isNotValid = "Пароль должен быть не менее 8 символов";
    }
    else if (password != RePassword) {
        isNotValid = "Пароли не совпадают";
    }
    else if (state == "") {
        isNotValid = "Укажите пароль";
    }

    if (isNotValid) {
        alert(isNotValid);
    } else {
        confirm(
            "Здравствуйте пользователь " + name + "\n\t"
            + "Ваши данные: \n\t"
            +"Email: " + email + "\n\t"
            + "Пол:" + state);
    }

}