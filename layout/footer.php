<footer>
    <div class="footer-bottom">
        <div class="container">
            <div class="row d-flex">
                <p class="col-lg-12 footer-text text-center">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Direktorat Jenderal Bimbingan Masyarakat Islam | All rights reserved by <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="https://www.instagram.com/auliaulfiana/?hl=id" target="_blank">VIVI</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="admin/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script>
    $('.next').click(function(){
        var nextId = $(this).parents('.tab-pane').next().attr("id");
        if (nextId == 'step2') {
            if (validasi1()) $('[href="#'+nextId+'"]').tab('show');
            else warning_validasi();
        } else if (nextId == 'step3') {
            if (validasi2()) {
                // process input to database
                var data = new FormData($('#formDaftar')[0]);
                $.ajax({
                    url     : 'controller.php',
                    method  : "POST",
                    data    : data,
                    xhr     : function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener('progress', function(evt) {
                            if (evt.lengthComputable) {
                                $("#loading, .loader").removeAttr('hidden');
                            }
                        }, false);
                        return xhr;
                    },
                    contentType : false,
                    processData: false,
                    success : function(data) {
                        $("#loading, .loader").attr('hidden', '');
                        console.log(data);
                        // $('[href="#'+nextId+'"]').tab('show');
                    }
                });
            }
            else warning_validasi();
        }
        return false;
    })

    function validasi1() {
        var desa_id = $('#desa_id').val();
        var tggl_akad = $('#tggl_akad').val();
        var waktu_akad = $('#waktu_akad').val();
        var lokasi_nikah = $('#lokasi_nikah').val();
        // var email_pendaftar = $('#email_pendaftar').val();

        if (desa_id == '' || tggl_akad == '' || waktu_akad == '' || lokasi_nikah == '') return false;
        else return true;
    }

    function validasi2() {
        // data suami
        var warga_negara_sm = $('#warga_negara_sm').val();
        var nik_suami = $('#nik_suami').val();
        var nama_suami = $('#nama_suami').val();
        var tempat_lahir_sm = $('#tempat_lahir_sm').val();
        var tggl_lahir_sm = $('#tggl_lahir_sm').val();
        var umur_suami = $('#umur_suami').val();
        var alamat_suami = $('#alamat_suami').val();
        var status_suami = $('#status_suami').val();
        var agama_suami = $('#agama_suami').val();
        var pekerjaan_suami = $('#pekerjaan_suami').val();
        var pas_foto_sm = $('#pas_foto_sm').prop('files')[0];

        // data istri
        var warga_negara_is = $('#warga_negara_is').val();
        var nik_istri = $('#nik_istri').val();
        var nama_istri = $('#nama_istri').val();
        var tempat_lahir_is = $('#tempat_lahir_is').val();
        var tggl_lahir_is = $('#tggl_lahir_is').val();
        var umur_istri = $('#umur_istri').val();
        var alamat_istri = $('#alamat_istri').val();
        var status_istri = $('#status_istri').val();
        var agama_istri = $('#agama_istri').val();
        var pekerjaan_istri = $('#pekerjaan_istri').val();
        var pas_foto_is = $('#pas_foto_is').prop('files')[0];

        // data wali
        var nik_wali = $('#nik_wali').val();
        var no_kk = $('#no_kk').val();
        var nama_wali = $('#nama_wali').val();
        var status_wali = $('#status_wali').val();
        var agama_wali = $('#agama_wali').val();
        var hubungan_wali = $('#hubungan_wali').val();
        var tempat_lahir_wl = $('#tempat_lahir_wl').val();
        var tggl_lahir_wl = $('#tggl_lahir_wl').val();
        var umur_wali = $('#umur_wali').val();
        var alamat_wali = $('#alamat_wali').val();
        var no_telepon = $('#no_telepon').val();
        var pekerjaan_wali = $('#pekerjaan_wali').val();
        var bin = $('#bin').val();

        if (warga_negara_sm == '' || nik_suami == '' || nama_suami == '' || tempat_lahir_sm == '' || umur_suami == '' || alamat_suami == '' || tggl_lahir_sm == '' || status_suami == '' || agama_suami == '' || pekerjaan_suami == '' || pas_foto_sm == undefined) return false;
        else if (warga_negara_is == '' || nik_istri == '' || nama_istri == '' || tempat_lahir_is == '' || tggl_lahir_is == '' || umur_istri == '' || alamat_istri == '' || status_istri == '' || agama_istri == '' || pekerjaan_istri == '' || pas_foto_is == undefined) return false;
        else if (nik_wali == '' || no_kk == '' || nama_wali == '' || status_wali == '' || agama_wali == '' || hubungan_wali == '' || tempat_lahir_wl == '' || tggl_lahir_wl == '' || umur_wali == '' || alamat_wali == '' || no_telepon == '' || pekerjaan_wali == '' || bin == '') return false;
        else if ($('#cek-dokumen').is(':checked') == false) return false;
        else return true;
    }

    function warning_validasi() {
        Swal.fire({
            icon: 'warning',
            title: 'Lengkapi Data',
            text: 'Pastikan anda telanh melengkapi semua data inputan dan menyetujui persyaratan dokumen',
        })
    }

    $('.back').click(function(){
        var prevId = $(this).parents('.tab-pane').prev().attr("id");
        $('[href="#'+prevId+'"]').tab('show');
        return false;
    })

    $('.tab-head-this').on('shown.bs.tab', function (e) {
        //update progress
        var step = $(e.target).data('step');
        var percent = (parseInt(step) / 3) * 100;

        $('.progress-bar').css({width: percent + '%'});
        $('.progress-bar').text("Step " + step + " of 3");
        //e.relatedTarget // previous tab
    })

    $('.first').click(function(){
        $('#myWizard a:first').tab('show')
    })

    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })

    // hitung umur

    // $(function() {
    //     $( ".umur" ).datepicker();
    // });

    window.onload=function(){
        $('.umur').on('change', function() {
            var dob = new Date(this.value);
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            // $('.result').val(age);
            $(this).parents('.find-umur').find('.result').val(age);
        });
    }

    

    $(window).scroll(function(){
        handleTopNavAnimation();
    });

    // $(window).load(function(){
    //     handleTopNavAnimation();
    // });

    function handleTopNavAnimation() {
        var top=$(window).scrollTop();

        if(top>10){
            $('#site-nav').addClass('navbar-solid'); 
        }
        else{
            $('#site-nav').removeClass('navbar-solid'); 
        }
    }

</script>
</body>
</html>