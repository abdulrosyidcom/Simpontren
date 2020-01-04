        <div class="dashboard_contents dashboard_statement_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="dashboard__title">
                                <div class="date_area">
                                    <button type="submit" data-target="#userNotesModal" data-toggle="modal" class="btn btn--sm btn--round btn--color1 modalInsertNotes">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-md-12">

                        <?= form_error('note', '<div class="alert alert-danger">', '</div>') ?>

                        <?= $this->session->flashdata('message'); ?>

                        <div class="statement_table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Note</th>
                                        <th>Terbit</th>
                                        <th>Aktif</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($notes as $note) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $note['name']; ?></td>
                                            <td><?= substr($note['note'], 0, 20); ?></td>
                                            <td><?= date('d M Y', $note['date_created']); ?></td>
                                            <?php if( $note['is_active'] == 'aktif' ) : ?>
                                            <td class="type">
                                                <span class="sale">Aktif</span>
                                            </td>
                                            <?php else: ?>
                                            <td class="type">
                                                <span class="purchase">Proses</span>
                                            </td>
                                            <?php endif; ?>
                                            <td class="type">
                                                <a href="" data-target="#userNotesModal" data-toggle="modal" class="modalUpdateNotes" data-id="<?= $note['id']; ?>">
                                                    <span class="sale">Update</span>  
                                                </a>
                                                <a href="<?= base_url('user/delete_note/') . $note['id']; ?>" onclick="return confirm('Data Segera Dihapus');">
                                                    <span class="withdrawal">Delete</span>  
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                            <div class="pagination-area pagination-area2">
                                <nav class="navigation pagination " role="navigation">
                                    <div class="nav-links">
                                        <a class="prev page-numbers" href="#">
                                            <span class="lnr lnr-arrow-left"></span>
                                        </a>
                                        <a class="page-numbers current" href="#">1</a>
                                        <a class="page-numbers" href="#">2</a>
                                        <a class="page-numbers" href="#">3</a>
                                        <a class="next page-numbers" href="#">
                                            <span class="lnr lnr-arrow-right"></span>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->



    <!-- Modals -->
    <div class="modal fade rating_modal" id="userNotesModal" tabindex="-1" role="dialog" aria-labelledby="rating_modal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="rating_modal">Form Tambah Catatan</h3>
                    <p>by
                        <a href="<?= base_url('user'); ?>"><?= $user['name']; ?></a>
                    </p>
                </div>
                <!-- end /.modal-header -->

                <div class="modal-body">
                    <form action="<?= base_url('user/notes'); ?>" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="note">Catatan</label>
                            <textarea name="note" id="note" cols="30" rows="10"></textarea>
                            <?= form_error('note', ' <span class="text-danger">', '</span>'); ?>
                        </div>
                        
                        <button type="submit" class="btn btn--round btn--default">Simpan</button>
                        <button class="btn btn--round modal_close" data-dismiss="modal">Close</button>
                    </form>
                    <!-- end /.form -->
                </div>
                <!-- end /.modal-body -->
            </div>
        </div>
    </div>