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
        height: 240px;
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

    .btn {
        width: 100px;
        height: 37px;
        /* background-color: #198754; */
        background-color: #0D6EFD;
        border-radius: 6px;
        color: #fff;
        font-size: 16px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        border-style: none;

    }

    .link {
        width: 100px;
        height: 37px;
        color: #212121;
        font-size: 16px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-decoration: none;
    }

    .btn-link {
        margin-top: 10px;
    }

    .tombol {
        width: 300px;
        height: 37px;
        margin: auto;
        display: flex;
        justify-content: space-between;
        margin-top: 40px;
    }

    .bawah {
        width: 150px;
        height: 80px;
        border-bottom: solid #212121 2px;
        text-align: center;
    }
</style>
<?php $session = \Config\Services::session(); ?>

<body>
    <br><br><br>
    <div class="card" id="kartu">
        <div class="kop">
            <img src="<?= base_url('img/R.png') ?>" alt="" width="50px" height="50px" />
            <div>
                <h3 style="text-align: center;">
                    PEMERINTAHAN KABUPATEN LOMBOK TENGAH <br /> DINAS TENAGA KERJA DAN TRANSMIGRASI
                </h3>
            </div>
        </div>
        <div class="card-body">
            <div>
                <h4 style="margin-top: 5px;">KARTU TANDA PENCARI KERJA</h4>
            </div>
            <?php foreach ($pnckr as $val) : ?>
                <?php if ($session->get('user_id') == $val->user_id) : ?>
                    <div class="row">
                        <div style="width: 100px; margin-right: 20px">
                            <img src="<?= base_url('img2/' . $val->fas_foto) ?>" alt="404" width="80px" height="100px" />
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <th><label for="">NO PENCAKER</label></th>
                                    <?php if ($val->stts_akun == 'valid') : ?>
                                        <td><?= ': PNCKR00', $val->id_pencaker ?></td>
                                    <?php endif; ?>
                                </tr>
                                <tr>
                                    <th>KETENTUAN</th>
                                    <td>: Demikian kartu tanda pencaker ini di cetak agar
                                        <br><?= ':  di gunakan dengan sebagaimana mestinya.' ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
            <br /><br />
            <div class="bawah">
                ttd pencaker
            </div>
        </div>
        <?php foreach ($pnckr as $val) : ?>
            <?php if ($session->get('user_id') == $val->user_id) : ?>
                <div class="tombol">
                    <div class="btn-link">
                        <a href="<?= base_url('pencaker/dashboard') ?>" class="link">Kembali</a>
                    </div>

                    <?php if ($val->stts_akun == 'valid') : ?>
                        <div>
                            <button type="button" id="download" class="btn">Download</button>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <script src="<?= base_url('js/html2canva.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $('#download').click(function() {
                html2canvas(document.getElementById('kartu')).then(function(canvas) {
                    var a = document.createElement('a')
                    document.body.appendChild(a)
                    a.download = "kartu.png"
                    a.href = canvas.toDataURL()
                    a.target = "_blank"
                    a.click()
                })
            })
        })
    </script>
</body>

</html>