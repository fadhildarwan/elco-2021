<?= $this->extend('templates_voters/index');?>

<?= $this->section('title');?>
<title>Candidate | Elco</title>
<?= $this->endSection();?>

<?= $this->section('page-content');?>

<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Candidate</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Candidate</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url(); ?>/img/paslon.png" alt="...">
            </div>
            <div class="text-center">
                <h2><b>Prisnu Fachrial I. - Alifian Arrazi</b></h2>
                <h4>Calon Ketua - Calon Wakil Ketua</h4>
            </div>
        </div>
    </div>

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Visi dan Misi</h6>
            </div>
            <div class="card-body">
                <h3><b>Visi</b></h3>
                <p>Mewujudkan <b>GAMAPI</b> sebagai wadah untuk teman-teman MKP dalam mengaktualisasikan diri dengan menciptakan iklim suasana kerja yang nyaman berdasarkan motivasi diri sehingga dapat menghasilkan karya yang berkualitas dan memiliki dampak terhadap pribadi maupun sosial dengan menyelaraskan output yang diimbangi nilai-nilai kultural internal organisasi.</p>
                <h3><b>Misi</b></h3>
                <ol>
                    <li>Menciptakan suasana kerja yang nyaman dengan berfokus kepada hubungan di dalam internal organisasi melalui pembentukan budaya apresiatif dan egaliter.</li>
                    <li>Memberi dampak nyata secara eksternal melalui kolaborasi strategis beragam stakeholder.</li>
                    <li>Melakukan profesionalitas organisasi dengan menempatkan SDM sesuai dengan minat, kemauan, motivasi, dan kapabilitas individu didalamnya berbasis pendekatan kultural.</li>
                    <li>Memberi kebermanfaatan bagi mahasiswa/i di departemen MKP dengan mengedepankan program kerja yang inklusif, representatif, dan kolaboratif.</li>
                    <li>Mendorong transparansi, akuntabilitas, dan responsibilitas didalam organisasi <b>GAMAPI</b>.</li>
                    <li>Mendorong gamapi sebagai himpunan mahasiswa untuk turut andil dalam memberikan kerja sosial-politik yang berlandaskan posisi keilmuan manajemen dan kebijakan publik.</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Visi dan Misi</h6>
            </div>
            <div class="card-body">
                <h3><b>Program Strategis</b></h3>
                <ol>
                    <li>Peer Counseling</li>
                    <li>Internal - External Co-Creation</li>
                    <li>Pengawalan Isu Kampus, lokal, dan Nasional</li>
                    <li>Kerjasama strategis antar lembaga</li>
                    <li>Program Hulu-Hilir</li>
                    <li>Diskusi <i>Policy</i> Canda Ria (DISPORIA)</li>
                    <li>Restrukturisasi Organisasi Tata Laksana</li>
                </ol>
            </div>
        </div>
    </div>
</div>

</div>

<?= $this->endSection();?>