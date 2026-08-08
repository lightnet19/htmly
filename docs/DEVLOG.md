# Developer Activity & Decision Log (DEVLOG)

Dokumen ini mencatat keputusan arsitektur, log aktivitas pengembangan harian, dan pertimbangan teknis selama pengerjaan proyek **HTMLy**.

---

## 📅 2026-08-08 — Bug Audit & Additional Fixes (#1045, #1059)

### 1. Fix Session Cookie Path Bug (Issue #1045)
- **Problem**: `session_start()` tidak mengunci atribut `path` pada cookie session, mengakibatkan konflik cookie `PHPSESSID` dengan aplikasi PHP lain pada server/subfolder yang sama.
- **Solution**: Dibuat helper `htmly_session_start()` di `system/includes/functions.php` yang secara otomatis mengonfigurasi `session_set_cookie_params()` dengan `path` situs HTMLy, `HttpOnly`, `SameSite=Strict`, dan `Secure` flag. Menggantikan seluruh panggilan `session_start()` di `system/admin/admin.php` dan `system/htmly.php`.

### 2. Fix RSS Feed Standard Compliance (Issue #1059)
- **Problem**: Item RSS Feed tidak memiliki tag standar `<guid permalink="true">`.
- **Solution**: Menambahkan panggilan `->guid($p->url, true)` pada pembentukan objek `Item()` di `generate_rss()` di `system/includes/functions.php`.

---

## 📅 2026-08-08 — Phase 4: Modern Admin UI/UX & Command Palette (Ctrl+K)
- `system/resources/css/admin-2026.css`: HSL Design System.
- `system/resources/js/command-palette.js`: Keyboard shortcut `Ctrl+K`.
- `system/admin/views/layout.html.php`: Admin layout integration.

---

## 📅 2026-08-08 — Phase 3: Automation Webhooks & MCP Server Package
- `system/core/Webhook.php` & `config/webhooks.ini`: Non-blocking cURL dispatcher.
- `mcp-server/`: Official Node.js MCP Server package.

---

## 📅 2026-08-08 — Phase 2 Ext: Full Coverage REST API v1 Suite
- Full API Controllers: `posts.php`, `pages.php`, `taxonomy.php`, `media.php`, `system.php`, `router.php`.

---

## 📅 2026-08-08 — Phase 1: Security Fix & Initial 2026 Modernization Planning
- Fix Issue #1058 (Draft Delete Safety Guard) & Seluruh Dokumentasi Perencanaan (`docs/`).
