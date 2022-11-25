<body>
    <main class="main">

        <div class="content">
            <h1>Dokumen</h1>

            <div class="toolbar">
                <a href="#" class="button button-primary" role="button"></a>
            </div>

            <table border="1">
                <thead>
                    <tr>
                        <th>No SK</th>
                        <th>Judul</th>
                        <th>Unit</th>
                        <th>Tipe Surat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista as $list) : ?>
                        <tr>
                            <td>
                                <div><?= $list['no_sk'] ?></div>
                            </td>
                            <td>
                                <div><?= $list['judul'] ?></div>
                            </td>
                            <td>
                                <div><?= $list['id_unit'] ?></div>
                            </td>
                            <td>
                                <div><?= $list['tipe_surat'] ?></div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main>
</body>