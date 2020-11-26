<?php
abstract class Converte
{
    static function Definir($de, $para)
    {
        $resultado = 'Error';
        if ($_GET['tipoDe'] == 1 && $_GET['tipoPara'] == 1) {
            $resultado = Converte::Km_Km($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 1 && $_GET['tipoPara'] == 2) {
            $resultado = Converte::Km_Hm($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 1 && $_GET['tipoPara'] == 3) {
            $resultado = Converte::Km_Dam($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 1 && $_GET['tipoPara'] == 4) {
            $resultado = Converte::Km_M($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 1 && $_GET['tipoPara'] == 5) {
            $resultado = Converte::Km_Dm($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 1 && $_GET['tipoPara'] == 6) {
            $resultado = Converte::Km_Cm($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 1 && $_GET['tipoPara'] == 7) {
            $resultado = Converte::Km_Mm($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 2 && $_GET['tipoPara'] == 1) {
            $resultado = Converte::Hm_Km($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 2 && $_GET['tipoPara'] == 2) {
            $resultado = Converte::Hm_Hm($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 2 && $_GET['tipoPara'] == 3) {
            $resultado = Converte::Hm_Dam($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 2 && $_GET['tipoPara'] == 4) {
            $resultado = Converte::Hm_M($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 2 && $_GET['tipoPara'] == 5) {
            $resultado = Converte::Hm_Dm($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 2 && $_GET['tipoPara'] == 6) {
            $resultado = Converte::Hm_Cm($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 2 && $_GET['tipoPara'] == 7) {
            $resultado = Converte::Hm_Mm($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 3 && $_GET['tipoPara'] == 1) {
            $resultado = Converte::Dam_Km($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 3 && $_GET['tipoPara'] == 2) {
            $resultado = Converte::Dam_Hm($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 3 && $_GET['tipoPara'] == 3) {
            $resultado = Converte::Dam_Dam($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 3 && $_GET['tipoPara'] == 4) {
            $resultado = Converte::Dam_M($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 3 && $_GET['tipoPara'] == 5) {
            $resultado = Converte::Dam_Dm($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 3 && $_GET['tipoPara'] == 6) {
            $resultado = Converte::Dam_Cm($_GET['entrada']);
        }
        if ($_GET['tipoDe'] == 3 && $_GET['tipoPara'] == 7) {
            $resultado = Converte::Dam_Mm($_GET['entrada']);
        }

        return $resultado;
    }

    static function Km_Km($Km)
    {
        return $Km . ' Km';
    }

    static function Km_Hm($Km)
    {
        $Hm = $Km * 10;
        return $Hm . ' Hm';
    }

    static function Km_Dam($Dam)
    {
        $Dam = $Dam * 100;
        return $Dam . ' Dam';
    }

    static function Km_M($M)
    {
        $M = $M * 1000;
        return $M . ' M';
    }

    static function Km_Dm($Dm)
    {
        $Dm = $Dm * 10000;
        return $Dm . ' Dm';
    }

    static function Km_Cm($Cm)
    {
        $Cm = $Cm * 100000;
        return $Cm . ' Cm';
    }

    static function Km_Mm($Mm)
    {
        $Mm = $Mm * 1000000;
        return $Mm . ' Mm';
    }

    static function Hm_Km($Km)
    {
        $Km = $Km / 10;
        return $Km . ' Km';
    }

    static function Hm_Hm($Hm)
    {
        return $Hm . ' Hm';
    }

    static function Hm_Dam($Dam)
    {
        $Dam = $Dam * 10;
        return $Dam . ' Dam';
    }

    static function Hm_M($M)
    {
        $M = $M * 100;
        return $M . ' M';
    }

    static function Hm_Dm($Dm)
    {
        $Dm = $Dm * 1000;
        return $Dm . ' Dm';
    }

    static function Hm_Cm($Cm)
    {
        $Cm = $Cm * 10000;
        return $Cm . ' Cm';
    }

    static function Hm_Mm($Mm)
    {
        $Mm = $Mm * 100000;
        return $Mm . ' Mm';
    }

    static function Dam_Km($Km)
    {
        $Km = $Km / 100;
        return $Km . ' Km';
    }

    static function Dam_Hm($Hm)
    {
        $Hm = $Hm / 10;
        return $Hm . ' Hm';
    }

    static function Dam_Dam($Dam)
    {
        return $Dam . ' Dam';
    }

    static function Dam_M($M)
    {
        $M = $M * 10;
        return $M . ' M';
    }

    static function Dam_Dm($Dm)
    {
        $Dm = $Dm * 100;
        return $Dm . ' Dm';
    }

    static function Dam_Cm($Cm)
    {
        $Cm = $Cm * 1000;
        return $Cm . ' Cm';
    }

    static function Dam_Mm($Mm)
    {
        $Mm = $Mm * 10000;
        return $Mm . ' Mm';
    }
}
