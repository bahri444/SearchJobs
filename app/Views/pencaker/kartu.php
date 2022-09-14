<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
</head>
<style>
    * {
        margin-top: 0;
        padding: 0;
    }
    
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
    }
    
    .card {
        border: 3px solid black;
        background-color: yellow;
        padding: 20px;
        width: 600px;
        height: 300px;
        position: relative;
    }
    
    .kop {
        display: flex;
        justify-content: space-around;
        height: 65px;
        border-bottom: solid 2px black;
        padding-right: 55px;
    }
    
    .card-body {
        display: flex;
        flex-direction: column;
        height: 200px;
        justify-content: space-around;
        position: relative;
    }
    
    .row {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
    }
    
    .satu {
        display: flex;
    }
    
    h4 {
        text-align: center;
    }
</style>

<body>
    <br><br><br>
    <div class="card" id="kartu">
        <div class="kop">
             <img src="<?= base_url('img/R.png')?>" alt="" width="50px" height="50px" />
            <div>
                <h3 style="text-align: center;">
                    PEMERINTAHAN KABUPATEN LOMBOK TENGAH <br /> DINAS TENAGA KERJA DAN TRANSMIGRASI
                </h3>
            </div>
        </div>
        <div class="card-body">
            <div>
                <h4>KARTU TANDA PENCARI KERJA</h4>
            </div>
            <div class="row">
                <div style="width: 100px;">
                    <img src="<?= base_url('img/R.png')?>" alt="" width="50px" height="50px" />
                </div>
                <div>
                    <table>
                        <tr>
                            <td> <label for="">No pencaker </label></td>
                            <td>:<?= $no['id_pencaker']?>
                        </td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td>: Lorem ipsum dolor sit, amet Lorem ipsum dolor sit amet.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <br /><br />
            <div class="bawah">
                ttd pencaker
            </div>
        </div><br><br><br><br>
        <button type="button" id="download">download</button>
    </div>
    <script src="<?= base_url('js/html2canva.js') ?>"></script>
    <script>
        $(document).ready(function(){
            $('#download').click(function(){
                html2canvas(document.getElementById('kartu')).then(function(canvas){
                    var a=document.createElement('a')
                    document.body.appendChild(a)
                    a.download="kartu.png"
                    a.href=canvas.toDataURL(q)
                    a.target="_blank"
                    a.click()
                })
            })
        })
    </script>
</body>

</html>