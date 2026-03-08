# Struktur Views - Company Profile & Admin Dashboard

Dokumentasi struktur folder dan file Blade di `resources/views` beserta fungsinya.

---

## Ringkasan Struktur

```
resources/views/
├── layouts/           # Layout utama (wrapper HTML)
│   ├── app.blade.php
│   └── admin.blade.php
├── components/        # Komponen reusable (navbar, footer, sidebar)
│   ├── navbar.blade.php
│   ├── footer.blade.php
│   └── sidebar.blade.php
├── user/              # Halaman website user (company profile)
│   ├── home.blade.php
│   ├── about.blade.php
│   ├── services.blade.php
│   ├── portfolio.blade.php
│   └── contact.blade.php
└── admin/             # Halaman admin dashboard
    ├── dashboard.blade.php
    ├── services/
    │   ├── index.blade.php
    │   ├── create.blade.php
    │   └── edit.blade.php
    ├── portfolio/
    │   ├── index.blade.php
    │   ├── create.blade.php
    │   └── edit.blade.php
    └── contact/
        └── index.blade.php
```

---

## Fungsi Setiap Folder

### 1. `layouts/`

**Fungsi:** Menyimpan template layout yang dipakai oleh banyak halaman. Berisi struktur HTML dasar (doctype, head, body), inclusion navbar/footer, dan area untuk konten dinamis (`@yield('content')`, `@stack`).

- **Modular:** Satu layout dipakai banyak view, sehingga perubahan header/footer cukup di satu tempat.
- **File:**
  - `app.blade.php` — Layout utama untuk halaman website user (company profile). Memuat navbar, main content, footer, Vite assets, dan stack styles/scripts.
  - `admin.blade.php` — Layout untuk area admin. Memuat sidebar, header, dan area konten admin.

---

### 2. `components/`

**Fungsi:** Komponen UI yang dipakai berulang dan di-include dari layout atau halaman lain. Bukan halaman lengkap, melainkan bagian seperti navigasi dan footer.

- **Reusable:** Satu komponen (misalnya navbar) dipakai di semua halaman yang pakai layout yang sama.
- **File:**
  - `navbar.blade.php` — Navigasi atas: logo, link Home, About, Services, Portfolio, Contact. Bisa diperluas (dropdown, auth, dll).
  - `footer.blade.php` — Footer: copyright dan link cepat ke halaman utama.
  - `sidebar.blade.php` — Sidebar admin: menu Dashboard, Services, Portfolio, Contact, dan link View Website. Di-include di `layouts.admin`.

---

### 3. `user/`

**Fungsi:** View untuk halaman yang dilihat pengunjung website (company profile). Setiap file biasanya extends `layouts.app` dan mengisi section `content` (dan optional `title`, `styles`, `scripts`).

- **Satu halaman = satu file** (atau satu “page” dengan beberapa section di dalamnya).
- **File:**
  - `home.blade.php` — Halaman utama (landing).
  - `about.blade.php` — Tentang perusahaan; berisi juga **Visi** dan **Misi** (tidak halaman terpisah).
  - `services.blade.php` — Daftar layanan (nanti bisa diisi dari database).
  - `portfolio.blade.php` — Daftar portfolio/proyek (nanti bisa diisi dari database).
  - `contact.blade.php` — Halaman kontak + form kirim pesan (action ke route `contact.store`).

---

### 4. `admin/`

**Fungsi:** Semua view untuk area admin (dashboard dan CRUD). Layout-nya terpisah: `layouts.admin` (sidebar, header admin). Route admin memakai prefix `/admin`.

- **Pemisahan jelas:** Halaman user (folder `user/`) vs back-office admin (folder `admin/`). Dashboard berada langsung di dalam folder `admin/`.
- **File:**
  - `dashboard.blade.php` — Halaman utama admin: ringkasan (total services, portfolio, pesan) dan sambutan.
  - **`admin/services/`** — CRUD layanan:
    - `index.blade.php` — Daftar layanan (tabel).
    - `create.blade.php` — Form tambah layanan.
    - `edit.blade.php` — Form edit layanan (menerima variabel `$service` dari controller).
  - **`admin/portfolio/`** — CRUD portfolio:
    - `index.blade.php` — Daftar portfolio (tabel).
    - `create.blade.php` — Form tambah portfolio (dengan upload gambar).
    - `edit.blade.php` — Form edit portfolio (variabel `$portfolio`).
  - **`admin/contact/`** — Hanya baca pesan:
    - `index.blade.php` — Daftar pesan dari form contact (tabel).

---

## Praktik Laravel yang Digunakan

1. **Layout inheritance** — Halaman extend `layouts.app` atau `layouts.admin`, konten di `@yield('content')`.
2. **Components** — Navbar dan footer di-`@include` dari layout agar konsisten dan mudah dirawat.
3. **Named routes** — Semua link memakai `route('name')` agar URL bisa diubah dari satu tempat (`routes/web.php`).
4. **Section & stack** — `@section('title')`, `@stack('styles')`, `@stack('scripts')` untuk title dan asset per halaman.
5. **Pemisahan front vs admin** — Layout dan folder view terpisah (`pages/` vs `admin/`), siap untuk middleware auth dan controller terpisah.
6. **Form** — CSRF `@csrf`, validasi error `@error`, old input `old()` sudah disiapkan di form contact dan form admin (services, portfolio).

---

## Langkah Pengembangan Selanjutnya

- Ganti closure di `routes/web.php` dengan **Controller** (mis. `PageController`, `Admin\ServiceController`, `Admin\PortfolioController`, `Admin\ContactController`).
- Tambah **Model** dan migration untuk Service, Portfolio, Contact message; isi view dari database.
- Tambah **middleware auth** pada route group `admin` dan halaman login/register jika belum ada.
- Sesuaikan **tailwind/Vite** di `layouts/app` dan `layouts/admin` jika pakai build step (sudah ada `@vite`).

Struktur ini dibuat rapi dan sederhana agar cocok untuk website company profile dan siap dikembangkan secara modular.
