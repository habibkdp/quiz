<html>

<body>
    <form method="POST" action="<?= base_url('user/penilaian') ?>">
        <?php
        $no = 1;
        $nilai = 0;
        foreach ($soal as $s) :
            ?>
            <h3><?= $no . '. ' . $s->soal; ?></h3>
            <input type="radio" name="pilihan[<?= $s->id_jawaban ?>]" value="A">A. <?= $s->jawaban_a ?>
            <br>
            <input type="radio" name="pilihan[<?= $s->id_jawaban ?>]" value="B">B. <?= $s->jawaban_b ?>
            <br>
            <input type="radio" name="pilihan[<?= $s->id_jawaban ?>]" value="C">C. <?= $s->jawaban_c ?>
            <br>
            <input type="radio" name="pilihan[<?= $s->id_jawaban ?>]" value="D">D. <?= $s->jawaban_d ?>
            <br>
        <?php
            $no++;
        endforeach;
        ?>
        <input type="hidden" name="kode" value="<?= $s->id_jenis ?>">
        <input type="submit" name="submit" vlaue="Get Values">
    </form>
</body>

</html>