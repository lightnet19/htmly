# Developer Activity & Decision Log (DEVLOG)

Dokumen ini mencatat keputusan arsitektur, log aktivitas pengembangan harian, dan pertimbangan teknis selama pengerjaan proyek **HTMLy**.

---

## 📅 2026-08-08 — Version Bump to v3.2.0 (2026 Modern Edition Release)

### 1. Release Version Configuration
- Memperbarui `HTMLY_VERSION` di `index.php` dari `v3.1.1` menjadi **`v3.2.0`**.
- Memperbarui file versi cache `cache/installedVersion.json` menjadi `{"tag_name": "v3.2.0"}`.
- Memperbarui `CHANGELOG.md` untuk menandai versi rilis **`[v3.2.0] - 2026-08-08`**.

---

## 📅 2026-08-08 — Contributing Guide & Local Documentation Portal
- `CONTRIBUTING.md`: Panduan kontribusi resmi di akar repositori.

---

## 📅 2026-08-08 — Bug Audit & Additional Fixes (#1045, #1059)
- Fix Issue #1045 (Session Cookie PATH Scope) & Issue #1059 (RSS Item GUID Standard).
- Metadata update: `COPYRIGHT.txt` (2026), `humans.txt`, `robots.txt`.

---

## 📅 2026-08-08 — Phase 4: Modern Admin UI/UX & Command Palette (Ctrl+K)
- `system/resources/css/admin-2026.css`: HSL Design System.
- `system/resources/js/command-palette.js`: Keyboard shortcut `Ctrl+K`.

---

## 📅 2026-08-08 — Phase 3: Automation Webhooks & MCP Server Package
- `system/core/Webhook.php` & `mcp-server/`: Official Node.js MCP Server package.

---

## 📅 2026-08-08 — Phase 2 Ext: Full Coverage REST API v1 Suite
- Full API Controllers: `posts.php`, `pages.php`, `taxonomy.php`, `media.php`, `system.php`, `router.php`.

---

## 📅 2026-08-08 — Phase 1: Security Fix & Initial 2026 Modernization Planning
- Fix Issue #1058 (Draft Delete Safety Guard) & Seluruh Dokumentasi Perencanaan (`docs/`).
