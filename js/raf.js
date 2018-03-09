( función () {
    var lastTime =  0 ;
    var vendors = [ ' ms ' , ' moz ' , ' webkit ' , ' o ' ];
    for ( var x =  0 ; x <  proveedores . length  &&  ! window . requestAnimationFrame ; ++ x) {
        ventana . requestAnimationFrame  =  window [proveedores [x] + ' RequestAnimationFrame ' ];
        ventana . cancelAnimationFrame  =  window [proveedores [x] + ' CancelAnimationFrame ' ]
                                   ||  ventana [proveedores [x] + ' CancelRequestAnimationFrame ' ];
    }
 
    if ( ! window . requestAnimationFrame )
        ventana . requestAnimationFrame  =  function ( callback , element ) {
            var currTime =  new  Date (). getTime ();
            var timeToCall =  Math . max ( 0 , 16  - (currTime - lastTime));
            var id =  ventana . setTimeout ( function () { callback (currTime + timeToCall);},
              timeToCall);
            lastTime = currTime + timeToCall;
            devolución de identificación;
        };
 
    if ( ! window . cancelAnimationFrame )
        ventana . cancelAnimationFrame  =  function ( id ) {
            clearTimeout (id);
        };
} ());