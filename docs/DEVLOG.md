# Developer Activity & Decision Log (DEVLOG)

Dokumen ini mencatat keputusan arsitektur, log aktivitas pengembangan harian, dan pertimbangan teknis selama pengerjaan proyek **HTMLy**.

---

## 📅 2026-08-08 — Phase 1: Security Fix & Initial 2026 Modernization Planning

### 1. Fix Issue #1058 (Draft Delete Bug)
- **Problem**: Pengguna melaporkan bahwa saat menghapus draft lama (stale draft) yang memiliki nama file sama dengan artikel published, sistem dapat secara tidak sengaja menghapus file artikel published tersebut.
- **Root Cause Analysis**: `delete_post()` hanya mengecek apakah path diawali oleh `/content/`, tetapi tidak memverifikasi bahwa file yang akan dihapus dari konteks draft benar-benar berada di dalam folder `/draft/`.
- **Solution Executed**:
  - Menambahkan parameter `$is_draft` pada `delete_post($file, $destination, $is_draft = false)`.
  - Memverifikasi bahwa jika `$is_draft = true`, path yang diselesaikan dengan `realpath()` wajib mengandung substring `/draft/`.
  - Menambahkan pembatasan ekstensi `.md` sebelum mengeksekusi `unlink()`.
  - Mengupdate route handler di `system/htmly.php` untuk mendeteksi substring `/draft/` pada `$file` dan meneruskannya sebagai boolean ke `delete_post()`.

### 2. Comprehensive 2026 Planning & AI Guidelines Creation
- Membuat seluruh dokumen perencanaan arsitektur, API, n8n integration, MCP server, dan AI agent guidelines di direktori `docs/`:
  - `PRD.md`
  - `ARCHITECTURE.md`
  - `API_SPECIFICATION.md`
  - `N8N_INTEGRATION_GUIDE.md`
  - `MCP_SERVER_SPEC.md`
  - `AI_AGENT_GUIDELINES.md`
  - `AGENTS.md`
  - `DEVPLAN.md`
  - `DESIGN.md`
  - `DEVLOG.md`
- Memperbarui kebijakan `SECURITY.md` dengan standar keamanan siber OWASP 2026.
- Memperbarui `CHANGELOG.md` dengan catatan perubahan versi `[Unreleased]`.
