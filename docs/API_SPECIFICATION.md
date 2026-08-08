# HTMLy REST API Specification (v1)

API ini dirancang stateless dengan format respon JSON standar untuk mempermudah konsumsi oleh **n8n**, **Custom Webhooks**, dan **MCP Servers**.

---

## 🔒 Authentication
Kirim header pada setiap request:
```http
Authorization: Bearer YOUR_HTMLY_API_KEY
Content-Type: application/json
```

---

## 📌 Endpoints Summary

### 1. Posts & Drafts

#### `GET /api/v1/posts`
Mengambil daftar postingan.
- **Query Params**:
  - `status`: `published` | `draft` | `scheduled` (default: `published`)
  - `page`: integer (default: `1`)
  - `limit`: integer (default: `10`)
  - `tag`: string (optional)
  - `category`: string (optional)

**Response 200 OK**:
```json
{
  "success": true,
  "data": [
    {
      "id": "2026-08-08-post-slug",
      "title": "Judul Artikel",
      "slug": "post-slug",
      "url": "https://example.com/post/post-slug",
      "status": "published",
      "date": "2026-08-08 10:00:00",
      "category": "tech",
      "tags": ["ai", "php"],
      "content": "Isi markdown..."
    }
  ],
  "pagination": {
    "current_page": 1,
    "total_pages": 5,
    "total_items": 45
  }
}
```

#### `POST /api/v1/posts`
Membuat postingan atau draft baru.
- **Request Body**:
```json
{
  "title": "Masa Depan AI Agent di 2026",
  "content": "Isi lengkap artikel Markdown...",
  "category": "technology",
  "tags": "ai, automation, n8n",
  "status": "published", 
  "description": "Meta deskripsi singkat..."
}
```

#### `GET /api/v1/posts/{slug}`
Mengambil detail satu postingan berdasarkan slug.

#### `PUT /api/v1/posts/{slug}`
Memperbarui postingan yang sudah ada.

#### `DELETE /api/v1/posts/{slug}`
Menghapus postingan/draft berdasarkan slug.

---

### 2. Media Upload

#### `POST /api/v1/media/upload`
Upload file gambar/media (Multipart Form-Data).
- **Request**: `file` (binary)
- **Response**:
```json
{
  "success": true,
  "file_url": "https://example.com/content/uploads/2026/08/image.png",
  "markdown_snippet": "![image.png](https://example.com/content/uploads/2026/08/image.png)"
}
```
