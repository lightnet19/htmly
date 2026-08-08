# Developer Activity & Decision Log (DEVLOG)

Dokumen ini mencatat keputusan arsitektur, log aktivitas pengembangan harian, dan pertimbangan teknis selama pengerjaan proyek **HTMLy**.

---

## 📅 2026-08-08 — Phase 2 Ext: Full Coverage REST API v1 Suite

### Complete API Endpoints Suite (`system/api/v1/`)
- **`system/api/v1/pages.php`**: Controller untuk `GET /api/v1/pages`, `POST /api/v1/pages`, dan `DELETE /api/v1/pages/{slug}`.
- **`system/api/v1/taxonomy.php`**: Controller untuk `GET /api/v1/categories`, `POST /api/v1/categories`, dan `GET /api/v1/tags`.
- **`system/api/v1/media.php`**: Controller untuk `POST /api/v1/media/upload` (Multipart upload dengan validasi ekstensi & format markdown snippet auto-generation).
- **`system/api/v1/system.php`**: Controller untuk `GET /api/v1/system/health` (Telemetri server, PHP version, disk space, total posts/drafts/pages, cache size).
- **`system/api/v1/router.php`**: Diperbarui untuk mendukung routing lengkap ke seluruh controller baru.
- **`docs/API_SPECIFICATION.md`**: Diperbarui dengan tabel matriks spesifikasi REST API v1 Full Coverage.

---

## 📅 2026-08-08 — Phase 2: REST API v1 Engine Core Implementation

### 1. Core Modules
- `config/api_keys.ini`: Konfigurasi token API Key.
- `system/api/v1/auth.php`: Bearer token authentication guard (`hash_equals()`).
- `system/api/v1/posts.php`: Posts & Drafts API handler.
- `system/htmly.php`: REST API Interceptor.

---

## 📅 2026-08-08 — Phase 1: Security Fix & Initial 2026 Modernization Planning

### 1. Fix Issue #1058 (Draft Delete Bug)
- Menambahkan validasi path `/draft/` dan pengecekan ekstensi `.md` pada `delete_post()`.
