
    
    function abrirmensajeadocente(){
        window.open("../php/mensajedocente.php","_self");
    }

    function abrirmensajeapersonal(){
        window.open("../php/mensajepersonal.php","_self");
    }

    function abrirmensajesdocente(){
        window.open("../php/mensajesaldoc.php","_self");
    }

    function abrirmensajespersonal(){
        window.open("../php/mensajesalper.php","_self");
    }

    function mandaratras(){
        window.open("../php/menualumno.php","_self");
    }

/////////////////docentes////////////////////////////

    function abrirmensajeapersonal2(){
        window.open("../php/mensajepersonal2.php","_self");
    }

    function abrirmensajealumno(){
        window.open("../php/mensajealumno.php","_self");
    }

    function abrirmensajesalumno(){
        window.open("../php/mensajesdocal.php","_self");
    }

    function abrirmensajespersonal2(){
        window.open("../php/mensajesdocper.php","_self");
    }

    function mandaratras2(){
        window.open("../php/menuprofesor.php","_self");
    }

/////////////////personal////////////////////////////////////
    function abrirmensajealumno2(){
        window.open("../php/mensajealumno2.php","_self");
    }

    function abrirmensajesalumno2(){
        window.open("../php/mensajesperal.php","_self");
    }

    function mandaratras3(){
        window.open("../php/menupersonal.php","_self");
    }

    function abrirmensajeadocente2(){
        window.open("../php/mensajedocente2.php","_self");
    }

    function abrirmensajesdocente2(){
        window.open("../php/mensajesperdoc.php","_self");
    }
    ///////////mensajes de docentes a alumnos////////////////
    function mensajedoc(value){
        window.open("../php/mostrarmensajedocente.php","_self");
        var valor = value;
        session_start();
        $_SESSION['idmensaje']=valor;
    }

    function mandaratras4(){
        window.open("../php/mensajesaldoc.php","_self");
    }

    function mandaratras5(){
        window.open("../php/mensajesperdoc.php","_self");
    }

    function mandaratras6(){
        window.open("../php/mensajesperal.php","_self");
    }

    function mandaratras7(){
        window.open("../php/mensajesdocal.php","_self");
    }
    