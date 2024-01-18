
<?php
if (\Yii::$app->session->hasFlash('success')) {
    $session = Yii::$app->session;
    $language = $session->get('success');
    $toast = "toastr.success";
}
$js = <<<JS
$(document).ready(function (){
     new confettiKit({
                confettiCount: 40,
                angle: 90,
                startVelocity: 50,
                colors: randomColor({hue: 'blue',count: 18}),
                elements: {
                    'confetti': {
                        direction: 'down',
                        rotation: true,
                    },
                    'star': {
                        count: 10,
                        direction: 'down',
                        rotation: true,
                    },
                    'ribbon': {
                        count: 5,
                        direction: 'down',
                        rotation: true,
                    },
                    'custom': [{
                        count: 4,
                        width: 50,
                        textSize: 15,
                        content: '/confetti/shar.png',
                        contentType: 'image',
                        direction: 'up',
                        rotation: false,
                    }]
                },
                position: 'bottomLeftRight',
            }); 
     
     new confettiKit({
                colors:randomColor({hue:'pink',count: 18}),
                confettiCount: 40,
                angle: 90,
                startVelocity: 50,
                elements: {
                    'confetti': {
                        direction: 'down',
                        rotation: true,
                    },
                    'star': {
                        count: 10,
                        direction: 'down',
                        rotation: true,
                    },
                    'ribbon': {
                        count: 5,
                        direction: 'down',
                        rotation: true,
                    },
                },
                position: 'topLeftRight',
            });
})
    

JS;
$this->registerJs($js);
?>