# Developer Activity & Decision Log (DEVLOG)

Dokumen ini mencatat keputusan arsitektur, log aktivitas pengembangan harian, dan pertimbangan teknis selama pengerjaan proyek **HTMLy**.

---

## 📅 2026-08-08 — Phase 3: Automation Webhooks & MCP Server Package

### 1. Webhook Event Dispatcher (`system/core/Webhook.php`)
- **`config/webhooks.ini`**: Konfigurasi URL Webhook (misalnya endpoint n8n Webhook Trigger).
- **`system/core/Webhook.php`**: Mengimplementasikan `dispatch_webhook_event($event, $payload)` non-blocking cURL/Stream Context dispatcher untuk mengirim peristiwa HTTP POST saat post dipublish/dihapus.

### 2. Standalone MCP Server Package (`mcp-server/`)
- Membangun executable Node.js MCP Server resmi berbasis Stdio JSON-RPC.
- Menyediakan tools: `htmly_publish_post`, `htmly_list_posts`, `htmly_delete_post`, `htmly_get_system_health`.
- Memungkinkan AI Agent (**Hermes-Agent**, **OpenClaw**, **Antigravity**, **Cursor**) terhubung langsung ke HTMLy secara otonom.

---

## 📅 2026-08-08 — Phase 2 Ext: Full Coverage REST API v1 Suite

### Complete API Endpoints Suite (`system/api/v1/`)
- `pages.php`: Pages API controller.
- `taxonomy.php`: Categories & Tags API controller.
- `media.php`: Media Upload API controller.
- `system.php`: Telemetry & Health API controller.
- `router.php`: Full API router.

---

## 📅 2026-08-08 — Phase 1: Security Fix & Initial 2026 Modernization Planning
- Fix Issue #1058 (Draft Delete Safety Guard) & Seluruh Dokumentasi Perencanaan (`docs/`).
