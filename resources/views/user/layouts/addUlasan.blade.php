<div class="mb-5 text-center">
    <div>
        <h2>Berikan Ulasan</h2>
        <p>Berikan ulasan anda tentang website berita ini!</p>
    </div>
</div>
<div class="d-flex justify-content-center">
    <form class="w-50 p-5 border shadow-sm rounded-4" method="post" enctype="multipart/form-data" action="{{ route('data-ulasan.store') }}">
        @csrf
        <div class="pt-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="nama_lengkap" required>
        </div>
        <div class="pt-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="pt-3">
            <label for="ulasan" class="form-label">Ulasan</label>
            <textarea class="form-control" name="ulasan" rows="4" id="ulasan" oninput="countCharacters()" required></textarea>
            <small id="charCount" class="form-text text-muted">0/400 karakter</small>
            @if(session('message'))
                <div id="charAlert" class="alert alert-danger mt-2">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="pt-3 d-flex justify-content-end">
            <button class="btn btn-success add-confirm px-5" type="submit"><b>Simpan</b></button>
        </div>
    </form>
</div>

<script>
    function countCharacters() {
        const textarea = document.getElementById('ulasan');
        const charCount = document.getElementById('charCount');
        const charAlert = document.getElementById('charAlert');
        const maxChars = 400;

        const currentLength = textarea.value.length;
        charCount.textContent = `${currentLength}/${maxChars} karakter`;

        if (currentLength > maxChars) {
            charAlert.style.display = 'block';
        } else {
            charAlert.style.display = 'none';
        }
    }
</script>
