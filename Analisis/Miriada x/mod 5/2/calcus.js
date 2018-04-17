
$(function () {
    var num, acc = 0, op = "";
    function inic() {
        num = $("#num");
        vaciar();
        num.val();
    }
    function vaciar() {
        num.val("");
        num.val();
    }
    inic();
    num.on("click", function () {
        vaciar();
    });

    $("#entero").on("click", function () {
        num.val(num.val() > 0 ? Math.floor(num.val()) : Math.ceil(num.val()));
    });


    $("#factorial").on("click", function () {
        var f, i;
        f = num.val();
        for (i = f; i > 1; i--)
        {
            f *= (i - 1);
        }
        num.val(f);
    });

    $("#potencia").on("click", function () {
        num.val(Math.pow(2, num.val()));
    })
    $("#mas").on("click", function () {
        acc = num.val();
        op = "+";
        vaciar();
    });
    $("#menos").on("click", function () {
        acc = num.val();
        op = "-";
        vaciar();
    });
    $("#por").on("click", function () {
        acc = num.val();
        op = "*";
        vaciar();
    });
    $("#dividir").on("click", function () {
        acc = num.val();
        op = "/";
        vaciar();
    });
    $("#elevado").on("click", function () {
        acc = num.val();
        op = "x"
    });
    vaciar();
    $("#csv_suma").on("click", function () {
        var c, s, v;
        v = 0;
        c = num.val().split(",");
        for (s = 0; s < c.length; s++) {
            v += +c[s];
        }
        num.val(v);
    });


    $("#csv_mul").on("click", function () {
        var c, s, v;
        v = 1;
        c = num.val().split(",");
        for (s = 0; s < c.length; s++) {
            v *= +c[s];
        }
        num.val(v);
    });

    $("#reiniciar").on("click", function () {
        vaciar();
    })

    $("#calcular").on("click", function () {
        if (op === "+") {
            num.val(+acc + +num.val());
        }
        if (op === "-") {
            num.val(+acc - +num.val());
        }
        if (op === "/") {
            num.val(+acc / +num.val());
        }
        if (op === "*") {
            num.val(+acc * +num.val());
        }
        if (op === "x") {
            num.val(Math.pow(+acc, +num.val()));
        }
        num.val();
    });


});

$(function () {
    $("#num").on("click", function () {
        $("#num").val("");
    }
    );

    $("#cuadrado").on("click", function () {
        var num = $("#num");
        num.val(num.val() * num.val());
    }
    );
});


$(function () {
    $("#num").on("click", function () {
        $("#num").val("");
    }
    );

    $("#inverso").on("click", function () {
        var num = $("#num");
        num.val(1 / num.val());
    }
    );
});

$(function () {
    $("#num").on("click", function () {
        $("#num").val("");
    }
    );

    $("#raiz").on("click", function () {
        var num = $("#num");
        num.val(Math.sqrt(num.val()));
    }
    );
});


