# Developer Activity & Decision Log (DEVLOG)

Dokumen ini mencatat keputusan arsitektur, log aktivitas pengembangan harian, dan pertimbangan teknis selama pengerjaan proyek **HTMLy**.

---

## 📅 2026-08-08 — Phase 4: Modern Admin UI/UX & Command Palette (Ctrl+K)

### 1. Modern Design System (`system/resources/css/admin-2026.css`)
- Mengimplementasikan sistem warna HSL adaptif terhadap preferensi OS (`prefers-color-scheme: dark`).
- Menambahkan efek Glassmorphism (`backdrop-filter: blur(12px)`), elevasi bayangan halus, dan mikro-animasi pada permukaan admin.
- Menambahkan badge status berwarna cerah (Published/Draft/Scheduled).

### 2. Command Palette Module (`system/resources/js/command-palette.js`)
- Mengimplementasikan modal navigasi cepat yang dipicu oleh shortcut keyboard `Ctrl+K` atau `Cmd+K`.
- Menyediakan navigasi instan untuk pencarian aksi, membuat postingan/halaman baru, mengelola draft, kategori, komentar, dan konfigurasi.

### 3. Layout Integration (`system/admin/views/layout.html.php`)
- Menautkan `admin-2026.css` pada `<head>`.
- Menambahkan tombol indikator `Ctrl+K` pada top navbar.
- Menautkan `command-palette.js` pada footer.

---

## 📅 2026-08-08 — Phase 3: Automation Webhooks & MCP Server Package
- `system/core/Webhook.php` & `config/webhooks.ini`: Non-blocking cURL dispatcher.
- `mcp-server/`: Official Node.js MCP Server package (`index.js`).

---

## 📅 2026-08-08 — Phase 2 Ext: Full Coverage REST API v1 Suite
- Full API Controllers: `posts.php`, `pages.php`, `taxonomy.php`, `media.php`, `system.php`, `router.php`.

---

## 📅 2026-08-08 — Phase 1: Security Fix & Initial 2026 Modernization Planning
- Fix Issue #1058 (Draft Delete Safety Guard) & Seluruh Dokumentasi Perencanaan (`docs/`).
