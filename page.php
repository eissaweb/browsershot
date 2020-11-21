
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Diagnostic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
    </style>
</head>
<body>
    <div class="" >
        <div class="container px-md-5 mt-2">
            <div class="px-lg-5">
                <div class="container px-md- px-0 diagnostic-stats-container text-center">
                    <div class="btn-wrapper">
                        <a href="#" 
                        class="btn btn-primary rounded-lg btn-arena mt-md-5 mt-5 shadow-lg px-5">خطوة إلى الساحة</a>
                    </div>
                </div>
                
                <div class=" bg-white mt- py-2">
                   <?php $data = [32, 55, 18, 95, 5, 100]; ?>
                    <?php for ($i = 0; $i <= 5; $i++): 
                    $current = $data[$i];?>
                        <div class="bg-white rounded py-2 px-2">
                            <h6 class="flo">العد من الصفر</h6>
                            <div class="progress mb-0">
                                <div class="progress-bar bg-info"
                                 role="progressbar" style="width: <?= $current; ?>%"
                                 aria-valuenow="<?= $current; ?>" aria-valuemin="<?= $current; ?>" 
                                 aria-valuemax="100"></div>
                                 
                            </div>
                            <small class="text-secondary float-right"><?= $current; ?></small>
                            <small class="text-secondary float2-left">100</small>
                        </div>
                    <?php endfor; ?>
                                            
                </div>
                
                <div class="bg-light py-5 text-center">
                    <a href="http://dev.labeep.me/diagnostic/print" 
                    class="btn ixl-btn-primary text-white labeep-text-600">طباعة تقرير التشخيص الكلي</a>
                </div>
            </div>
        </div>
        <div class="my-5"></div>
    </div>
</body>
</html>