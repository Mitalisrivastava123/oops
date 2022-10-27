<?php

if (!isset($_SESSION['carts'])) {
    $_SESSION['carts'] = [];
}
?>
<?php

class Cart
{

    function function1($m1)
    {
        include 'config.php';
        $flag = 0;
        foreach ($_SESSION['carts'] as $k4 => $v4) {
            if ($v4['id'] == $m1) {
                $flag = 1;
            }
        }
        if ($flag == 0) {
            foreach ($products as $k => $v) {
                if ($v['id'] == $m1) {
    
                    array_push($_SESSION['carts'], $v);
                }
            }
        } else {
            foreach ($_SESSION['carts'] as $k5 => $v5)
                if ($v5['id'] == $m1) {
                    $_SESSION['carts'][$k5]["quantity"] += 1;
                }
        }
    echo json_encode($_SESSION['carts']); 
    }


    function function2($m1)
    {

        foreach ($_SESSION['carts'] as $k1 => $v1) {
            if ($v1['id'] == $m1) {
                array_splice($_SESSION['carts'], $k1, 1);
            }
        }
        echo json_encode($_SESSION['carts']);


    }
    function function3($m1)
    {
        foreach ($_SESSION['carts'] as $k2 => $v2)
            if ($v2['id'] == $m1) {
                $_SESSION['carts'][$k2]["quantity"] += 1;
            }

        echo json_encode($_SESSION['carts']);


    }
    function function4($m1)
    {
        foreach ($_SESSION['carts'] as $k3 => $v3)
            if ($v3['id'] == $m1) {
                if ($v3['quantity'] > 1 && $v3['id'] == $m1) {
                    $_SESSION['carts'][$k3]["quantity"] -= 1;
                } else if ($v3['quantity'] <= 1 && $v3['id'] == $m1) {

                    array_splice($_SESSION['carts'], $k3, 1);
                }
            }

        echo json_encode($_SESSION['carts']);
    }
}







?>