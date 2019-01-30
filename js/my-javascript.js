function onSelect(str) {
    var a = new XMLHttpRequest();
    a.onreadystatechange = function () {

        document.getElementById('result').value = this.responseText;
    }
    a.open("GET", "nalozi_podatke.php?id=" + str, true);
    a.send();
}

// shranjevanje v bazo z ajax klicem po kliku na izbrano opcijo iz seznama

$("#save").click(function () {


    var result = $("#result").val();
    var id = $("#seznam").val();

    $.ajax({
        url: 'posodobi.php',
        type: 'post',
        data: {id: id, result: result}
        ,
        success: function (data) {
            window.location.reload(true);
        }
    });
});



