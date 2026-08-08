# CHANGELOG

Semua perubahan penting pada proyek HTMLy akan didokumentasikan di file ini.

Format changelog ini mengikuti panduan [Keep a Changelog](https://keepachangelog.com/en/1.0.0/) dan menggunakan [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

---

## [Unreleased] - 2026-08-08

### Added
- **2026 Modernization Documentation Suite**:
  - `docs/PRD.md`: Product Requirement Document untuk modernisasi UI, REST API, n8n, dan MCP integration.
  - `docs/ARCHITECTURE.md`: Arsitektur sistem baru & rencana refactoring modular.
  - `docs/API_SPECIFICATION.md`: Spesifikasi lengkap REST API v1 (`/api/v1/*`).
  - `docs/N8N_INTEGRATION_GUIDE.md`: Panduan integrasi workflow otomasi n8n.
  - `docs/MCP_SERVER_SPEC.md`: Spesifikasi Model Context Protocol (MCP) Server untuk AI Agent (Hermes, OpenClaw, Antigravity).
  - `docs/AI_AGENT_GUIDELINES.md` & `docs/AGENTS.md`: Panduan khusus pengembangan & instruksi sistem untuk AI Coding Agent.
  - `docs/DEVPLAN.md`: Roadmap pengembangan per fase.
  - `docs/DESIGN.md`: Sistem desain UI 2026 (Dark Mode, Glassmorphism, CSS Custom Properties).
  - `docs/DEVLOG.md`: Catatan harian aktivitas pengembangan.

### Fixed
- **Critical Fix (Issue #1058)**: Menambahkan validasi path `/draft/` dan pengecekan ekstensi file `.md` pada fungsi `delete_post()` di `system/admin/admin.php` serta memperbarui route delete di `system/htmly.php`. Ini mencegah draft stale menghapus artikel yang sudah dipublish.

### Security
- **SECURITY.md Update**: Memperbarui kebijakan keamanan sesuai standar OWASP 2026 (Path Traversal Protection, Rate Limiting, HTTP Security Headers, dan pelaporan kerentanan privat).

---

## [v3.1.1] - 2024-05-10
### Fixed
- Arbitrary file deletion vulnerability patch (CVE-2024-34191).
- Minor bug fixes & translation updates.
