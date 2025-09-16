<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profil – Ibnu Qurtubi</title>
  <style>
    :root{
      --biru-utama:#0f68ff;
      --biru-muda:#eaf2ff;
      --biru-gelap:#0b46a8;
      --teks:#0f172a;
    }
    *{box-sizing:border-box}
    html{scroll-behavior:smooth}
    body{
      margin:0; font-family:system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Calibri,"Helvetica Neue",Arial,sans-serif;
      color:var(--teks); background:linear-gradient(180deg,var(--biru-muda),#ffffff);
      min-height:100vh; display:grid; place-items:center;
    }
    .kartu{
      width:min(920px,92vw); background:#fff; border-radius:20px; box-shadow:0 10px 30px rgba(15,104,255,.15);
      overflow:hidden; border:1px solid #e6efff;
    }
    .header{
      background:linear-gradient(135deg,var(--biru-utama),var(--biru-gelap)); color:#fff;
      padding:28px; display:flex; align-items:center; gap:20px; flex-wrap:wrap;
    }
    .foto{
      width:108px; height:108px; border-radius:50%; background:#fff; display:grid; place-items:center;
      overflow:hidden; border:3px solid rgba(255,255,255,.7);
    }
    .foto img{ width:100%; height:100%; object-fit:cover; display:block }
    .foto .placeholder{
      width:70%; height:70%; border-radius:50%; background:conic-gradient(from 120deg,#dfeaff,#bcd2ff,#dfeaff);
      display:grid; place-items:center; color:#234; font-weight:700; font-size:14px; letter-spacing:.5px;
    }
    h1{ margin:0; font-size:clamp(20px,3.6vw,34px); font-weight:800; letter-spacing:.3px }
    .header small{ display:block; opacity:.9; font-weight:500; margin-top:6px }

    .isi{ padding:26px; display:grid; grid-template-columns: 1.1fr .9fr; gap:26px }
    @media (max-width:760px){ .isi{ grid-template-columns:1fr } }

    .biodata,.hobi{ background:linear-gradient(180deg,#ffffff,#f6f9ff); border:1px solid #eaf0ff; border-radius:16px; padding:18px }
    .judul{ font-size:18px; font-weight:800; color:var(--biru-gelap); margin:0 0 12px }

    .list{ display:grid; gap:10px; margin:0; padding:0; list-style:none }
    .item{ display:grid; grid-template-columns:150px 12px 1fr; gap:10px; align-items:center;
           padding:10px 12px; border-radius:12px; background:#fff; border:1px solid #eef3ff }
    .item .label{ font-weight:600; color:#244 }
    .item .colon{ opacity:.5 }

    .hobi-grid{ display:grid; grid-template-columns:1fr 1fr; gap:14px }
    @media (max-width:520px){ .item{grid-template-columns:120px 12px 1fr} .hobi-grid{grid-template-columns:1fr} }
    .hobi-kartu{
      background:#fff; border:1px solid #e9f0ff; border-radius:14px; padding:16px; display:flex; align-items:center; gap:14px;
      transition:transform .15s ease, box-shadow .15s ease; min-height:86px
    }
    .hobi-kartu:hover{ transform:translateY(-2px); box-shadow:0 10px 18px rgba(15,104,255,.12) }
    .ikon-wrap{ width:54px; height:54px; border-radius:12px; background:linear-gradient(135deg,#e8f1ff,#ffffff);
                border:1px solid #e3ecff; display:grid; place-items:center }
    .sr-only{ position:absolute; width:1px; height:1px; padding:0; margin:-1px; overflow:hidden; clip:rect(0,0,0,0); white-space:nowrap; border:0 }

    footer{ text-align:center; font-size:12px; color:#5b6b85; padding:16px 26px 26px }
    a{ color:var(--biru-utama); text-decoration:none }

    /* ===== Buttons ===== */
    .btn{ padding:10px 12px; border-radius:10px; border:1px solid #e6efff; background:var(--biru-utama); color:#fff; cursor:pointer }
    .btn.secondary{ background:#fff; color:#0f172a }
    .btn.warn{ background:#ef4444; border-color:#fecaca }

    /* ===== Menu titik tiga ===== */
    .menu{ margin-left:auto; position:relative; z-index:60 }
    #menuBtn{ background:transparent; border:none; cursor:pointer; color:#fff; font-size:22px; line-height:1; padding:6px 8px; border-radius:8px }
    #menuBtn:hover{ background:rgba(255,255,255,.12) }
    .menu-dropdown{ display:none; position:absolute; right:0; top:40px; background:#fff; border:1px solid #e6efff;
      border-radius:12px; box-shadow:0 10px 18px rgba(15,104,255,.15); overflow:hidden; min-width:200px; z-index:20 }
    .menu-dropdown a,.menu-dropdown button{ display:block; width:100%; text-align:left; padding:12px 14px; border:0; background:#fff;
      color:#0f172a; font:inherit; cursor:pointer }
    .menu-dropdown a:hover,.menu-dropdown button:hover{ background:#f1f6ff }

    /* Full width di grid */
    .full{ grid-column:1 / -1 }

    /* ===== Modal Login ===== */
    .modal{ position:fixed; inset:0; display:none; align-items:center; justify-content:center; background:rgba(15,23,42,.45); z-index:40; padding:20px }
    .modal.open{ display:flex }
    .modal-card{ width:min(420px,92vw); background:#fff; border-radius:16px; border:1px solid #eaf0ff; box-shadow:0 20px 40px rgba(15,104,255,.18); padding:20px }
    .modal-card h3{ margin:0 0 12px; color:var(--biru-gelap) }
    .field{ display:grid; gap:6px; margin:10px 0 }
    .field input{ padding:10px 12px; border:1px solid #e2e8f0; border-radius:10px; font:inherit }
    .actions{ display:flex; gap:10px; margin-top:12px }
    .err{ color:#b91c1c; font-size:13px; min-height:18px }

    /* ===== Catatan (CRUD) ===== */
    .notes-grid{ display:grid; grid-template-columns:1fr; gap:14px }
    .note-form{ background:#fff; border:1px solid #eaf0ff; border-radius:14px; padding:16px }
    .note-form .field{ display:grid; gap:6px; margin:8px 0 }
    .note-form input,.note-form textarea{ width:100%; padding:10px 12px; border:1px solid #e2e8f0; border-radius:10px; font:inherit }
    .note-form textarea{ min-height:110px; resize:vertical }
    .controls{ display:flex; gap:10px; flex-wrap:wrap; margin-top:10px }
    .muted{ color:#6b7280; font-size:13px }
    .note-table{ width:100%; border-collapse:separate; border-spacing:0 10px }
    .note-table th{ text-align:left; font-weight:700; color:var(--biru-gelap) }
    .note-row{ background:#fff; border:1px solid #eaf0ff; border-radius:12px }
    .note-row td{ padding:10px 12px }
    .pill{ display:inline-block; padding:4px 8px; font-size:12px; border-radius:999px; border:1px solid #dbeafe; background:#eff6ff; color:#1d4ed8 }

    /* Pinned list on home */
    .pinned-list{ display:grid; gap:10px }
    .pinned-card{ background:#fff; border:1px solid #eaf0ff; border-radius:12px; padding:12px }

    /* ===== Contact Person ===== */
    .contact{ display:grid; place-items:center }
    .contact-card{ width:min(820px,95%); background:#fff; border:1px solid #eaf0ff; border-radius:16px; padding:22px;
      display:grid; justify-items:center; gap:14px }
    .contact-avatar{ width:96px; height:96px; border-radius:50%; border:3px solid #e6efff; background:#eef5ff; display:grid; place-items:center; overflow:hidden }
    .contact-name{ margin:0; font-size:22px; font-weight:800; color:var(--biru-gelap) }
    .contact-list{ width:100%; display:grid; gap:10px }
    .contact-item{ display:flex; align-items:center; gap:10px; padding:12px; border:1px solid #eaf0ff; border-radius:12px; background:#fff }
    .contact-item .label{ min-width:130px; font-weight:700; color:var(--biru-gelap) }
    .contact-item a{ color:var(--biru-utama); text-decoration:none; word-break:break-all }
  </style>
</head>
<body>
  <main class="kartu" aria-labelledby="judul-profil">
    <header class="header">
      <div class="foto" aria-label="Foto Profil">
        <!-- <img src="foto-saya.jpg" alt="Foto Ibnu Qurtubi" /> -->
        <div class="placeholder">FOTO</div>
      </div>
      <div>
        <h1 id="judul-profil">Ibnu Qurtubi</h1>
        <small>Profil Singkat</small>
      </div>

      <!-- Menu titik tiga di kanan atas -->
      <div class="menu" aria-label="Menu">
        <button type="button" id="menuBtn" aria-haspopup="true" aria-expanded="false" aria-controls="menuDropdown" title="Menu">⋮</button>
        <div class="menu-dropdown" id="menuDropdown" role="menu">
          <a href="#riwayat" role="menuitem">Riwayat Pendidikan</a>
          <a href="#contact" role="menuitem">Contact Person</a>
          <button type="button" id="openLogin" role="menuitem">Halaman Khusus</button>
        </div>
      </div>
    </header>

    <section class="isi">
      <!-- Biodata -->
      <section class="biodata" aria-labelledby="judul-biodata">
        <h2 id="judul-biodata" class="judul">Biodata</h2>
        <ul class="list">
          <li class="item"><span class="label">Tempat, Tgl Lahir</span><span class="colon">:</span><span>Tanah Laut, 17 Maret 2006</span></li>
          <li class="item"><span class="label">Jenis Kelamin</span><span class="colon">:</span><span>Laki-laki</span></li>
          <li class="item"><span class="label">Alamat</span><span class="colon">:</span><span>JL. Abadi, Pelaihari</span></li>
        </ul>
      </section>

      <!-- Hobi -->
      <section class="hobi" aria-labelledby="judul-hobi">
        <h2 id="judul-hobi" class="judul">Hobi</h2>
        <div class="hobi-grid">
          <div class="hobi-kartu" role="img" aria-label="Berenang">
            <div class="ikon-wrap" aria-hidden="true">
              <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M7 18c1.2 0 1.8-.8 3-1s1.8.8 3 1 1.8-.8 3-1 1.8.8 3 1" stroke="#0f68ff" stroke-width="1.6" stroke-linecap="round"/>
                <circle cx="9" cy="8" r="2" fill="#0f68ff"/>
                <path d="M4 14c2-.8 3.5-1.2 5-2.8 1.4-1.4 2.5-2.2 4-1.2 1.3.9 2.3 2 4 2.5" stroke="#0b46a8" stroke-width="1.6" stroke-linecap="round"/>
              </svg>
            </div>
            <span class="sr-only">Berenang</span>
          </div>
          <div class="hobi-kartu" role="img" aria-label="Lari">
            <div class="ikon-wrap" aria-hidden="true">
              <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <circle cx="15.5" cy="5.5" r="2" fill="#0f68ff"/>
                <path d="M5 19c1 0 1.7-.5 2.5-1 .8-.6 1.6-1 2.5-1s1.7.4 2.5 1c.8.5 1.5 1 2.5 1" stroke="#0b46a8" stroke-width="1.6" stroke-linecap="round"/>
                <path d="M9 12l2-2 2 1 2 1.5" stroke="#0f68ff" stroke-width="1.6" stroke-linecap="round"/>
                <path d="M8 14l-1.5 3" stroke="#0b46a8" stroke-width="1.6" stroke-linecap="round"/>
              </svg>
            </div>
            <span class="sr-only">Lari</span>
          </div>
        </div>
      </section>

      <!-- Riwayat Pendidikan -->
      <section id="riwayat" class="biodata full" aria-labelledby="judul-riwayat">
        <h2 id="judul-riwayat" class="judul">Riwayat Pendidikan</h2>
        <ul class="list">
          <li class="item"><span class="label">SD</span><span class="colon">:</span><span>SDN PELAIHARI 4</span></li>
          <li class="item"><span class="label">SMP</span><span class="colon">:</span><span>SMP NEGERI 1 PELAIHARI</span></li>
          <li class="item"><span class="label">SMA</span><span class="colon">:</span><span>SMA NEGERI 1 PELAIHARI</span></li>
          <li class="item"><span class="label">Kuliah</span><span class="colon">:</span><span>POLITEKNIK NEGERI TANAH LAUT</span></li>
        </ul>
      </section>

      <!-- Catatan yang Ditampilkan di Beranda -->
      <section id="pinned" class="biodata full" aria-labelledby="judul-pinned">
        <h2 id="judul-pinned" class="judul">Catatan di Beranda</h2>
        <div id="pinnedList" class="pinned-list"></div>
        <p class="muted">Atur catatan yang ditampilkan melalui <em>Menu → Halaman Khusus</em>.</p>
      </section>

      <!-- Contact Person (public) -->
      <section id="contact" class="biodata full contact" aria-labelledby="judul-contact">
        <div class="contact-card">
          <div class="contact-avatar" aria-label="Foto Profil">
            <!-- <img src="foto-saya.jpg" alt="Ibnu Qurtubi"/> -->
            <div class="placeholder" style="width:70%;height:70%;border-radius:50%;display:grid;place-items:center;background:conic-gradient(from 120deg,#dfeaff,#bcd2ff,#dfeaff);font-weight:700;color:#234">FOTO</div>
          </div>
          <h3 id="judul-contact" class="contact-name">Ibnu Qurtubi</h3>
          <div class="contact-list" aria-describedby="judul-contact">
            <div class="contact-item"><span class="label">Email</span>
              <a href="mailto:ibnuqurtubii17@gmail.com">ibnuqurtubii17@gmail.com</a></div>
            <div class="contact-item"><span class="label">Telepon</span>
              <a href="tel:082251949516">082251949516</a></div>
            <div class="contact-item"><span class="label">WhatsApp</span>
              <a href="https://wa.me/6281351998394" target="_blank" rel="noopener">081351998394</a></div>
            <div class="contact-item"><span class="label">Instagram</span>
              <a href="https://instagram.com/ibnuqurtubii" target="_blank" rel="noopener">@ibnuqurtubii</a></div>
          </div>
        </div>
      </section>
    </section>

    <footer>
      © <span id="tahun"></span> Ibnu Qurtubi — Desain biru & putih, sederhana dan rapi.
    </footer>

    <!-- Modal Login -->
    <div class="modal" id="loginModal" aria-hidden="true" role="dialog" aria-labelledby="loginTitle">
      <div class="modal-card">
        <h3 id="loginTitle">Login – Halaman Khusus</h3>
        <div class="field">
          <label for="u">Username</label>
          <input id="u" name="username" type="text" autocomplete="off" />
        </div>
        <div class="field">
          <label for="p">Password</label>
          <input id="p" name="password" type="password" autocomplete="off" />
        </div>
        <div class="err" id="err"></div>
        <div class="actions">
          <button class="btn" id="doLogin">Login</button>
          <button class="btn secondary" id="closeLogin">Batal</button>
        </div>
      </div>
    </div>

    <!-- Halaman Khusus (CRUD) -->
    <section id="khusus" class="biodata full" style="display:none; margin-top:10px" aria-labelledby="judul-khusus">
      <h2 id="judul-khusus" class="judul">Halaman Khusus</h2>
      <p class="muted">Kelola catatan harianmu di sini. Kamu bisa menambah, mengedit, menghapus, dan menampilkan catatan di beranda.</p>

      <div class="notes-grid">
        <form id="noteForm" class="note-form">
          <div class="field">
            <label for="noteTitle">Judul</label>
            <input id="noteTitle" name="title" type="text" placeholder="Judul catatan" required />
          </div>
          <div class="field">
            <label for="noteBody">Isi Catatan</label>
            <textarea id="noteBody" name="body" placeholder="Tulis catatan di sini..." required></textarea>
          </div>
          <label style="display:flex; align-items:center; gap:8px;">
            <input id="notePinned" type="checkbox" /> Tampilkan di beranda utama
          </label>
          <input type="hidden" id="editingId" value="" />
          <div class="controls">
            <button type="submit" class="btn" id="saveBtn">Simpan</button>
            <button type="button" class="btn secondary" id="resetBtn">Reset</button>
          </div>
        </form>

        <div class="biodata" style="background:#fff">
          <h3 class="judul" style="margin-bottom:6px">Daftar Catatan</h3>
          <table class="note-table" aria-describedby="judul-khusus">
            <thead>
              <tr>
                <th style="width:34%">Judul</th>
                <th style="width:28%">Terakhir diubah</th>
                <th style="width:18%">Status</th>
                <th style="width:20%">Aksi</th>
              </tr>
            </thead>
            <tbody id="notesTbody"></tbody>
          </table>
          <p id="emptyNotes" class="muted" style="display:none; margin-top:6px">Belum ada catatan.</p>
        </div>
      </div>
    </section>
  </main>

  <script>
    // Tahun berjalan
    document.getElementById('tahun').textContent = new Date().getFullYear();

    // Dropdown menu
    const menuBtn = document.getElementById('menuBtn');
    const menuDropdown = document.getElementById('menuDropdown');
    const openLogin = document.getElementById('openLogin');

    menuBtn?.addEventListener('click', (e) => {
      e.stopPropagation();
      const open = menuDropdown.style.display === 'block';
      menuDropdown.style.display = open ? 'none' : 'block';
      menuBtn.setAttribute('aria-expanded', String(!open));
    });

    window.addEventListener('click', (e) => {
      if (!menuDropdown.contains(e.target) && !menuBtn.contains(e.target)) {
        menuDropdown.style.display = 'none';
        menuBtn.setAttribute('aria-expanded', 'false');
      }
    });

    // Tutup dropdown saat link diklik
    document.querySelectorAll('#menuDropdown a').forEach(a => {
      a.addEventListener('click', () => {
        menuDropdown.style.display = 'none';
        menuBtn.setAttribute('aria-expanded', 'false');
      });
    });

    // Modal login
    const modal = document.getElementById('loginModal');
    const btnLogin = document.getElementById('doLogin');
    const btnClose = document.getElementById('closeLogin');
    const err = document.getElementById('err');
    const khusus = document.getElementById('khusus');

    function openModal(){
      modal.classList.add('open');
      modal.setAttribute('aria-hidden','false');
      err.textContent='';
      const uEl = document.getElementById('u');
      const pEl = document.getElementById('p');
      if(uEl) uEl.value='';
      if(pEl) pEl.value='';
      uEl?.focus();
    }
    function closeModal(){ modal.classList.remove('open'); modal.setAttribute('aria-hidden','true'); }

    openLogin?.addEventListener('click', () => { openModal(); menuDropdown.style.display='none'; });
    btnClose?.addEventListener('click', closeModal);
    window.addEventListener('keydown', (e)=>{ if(e.key==='Escape') closeModal(); });
    modal?.addEventListener('click', (e)=>{ if(e.target===modal) closeModal(); });

    // Kredensial
    const VALID_USER = 'Ibnu Qurtubi';
    const VALID_PASS = 'Ibnuibnu';

    btnLogin?.addEventListener('click', () => {
      const u = document.getElementById('u').value.trim();
      const p = document.getElementById('p').value;
      if(u===VALID_USER && p===VALID_PASS){
        closeModal();
        khusus.style.display='block';
        khusus.scrollIntoView({behavior:'smooth'});
        renderAll();
      } else {
        err.textContent = 'Username atau password salah!';
      }
    });

    // ===== NOTES (localStorage) =====
    const NOTES_KEY = 'notes@ibnu';

    const form = document.getElementById('noteForm');
    const titleEl = document.getElementById('noteTitle');
    const bodyEl = document.getElementById('noteBody');
    const pinnedEl = document.getElementById('notePinned');
    const editingIdEl = document.getElementById('editingId');
    const saveBtn = document.getElementById('saveBtn');
    const resetBtn = document.getElementById('resetBtn');
    const tbody = document.getElementById('notesTbody');
    const emptyNotes = document.getElementById('emptyNotes');
    const pinnedList = document.getElementById('pinnedList');

    function loadNotes(){ try{ return JSON.parse(localStorage.getItem(NOTES_KEY)) || []; } catch{ return []; } }
    function saveNotes(arr){ localStorage.setItem(NOTES_KEY, JSON.stringify(arr)); }
    function uid(){ return Date.now().toString(36)+Math.random().toString(36).slice(2,7); }
    function fmt(ts){ const d=new Date(ts); return d.toLocaleString(); }

    function clearForm(){
      editingIdEl.value=''; titleEl.value=''; bodyEl.value=''; pinnedEl.checked=false; saveBtn.textContent='Simpan';
    }

    function renderTable(){
      const data = loadNotes();
      tbody.innerHTML = '';
      if (!data.length){
        emptyNotes.style.display = 'block';
        return;
      }
      emptyNotes.style.display = 'none';

      data.sort((a,b)=> b.updatedAt - a.updatedAt).forEach(n=>{
        const tr = document.createElement('tr');
        tr.className = 'note-row';
        tr.innerHTML = `
          <td><strong>${escapeHtml(n.title)}</strong></td>
          <td>${fmt(n.updatedAt)}</td>
          <td>${n.pinned ? '<span class="pill">Tampil di beranda</span>' : '-'}</td>
          <td>
            <button class="btn secondary" data-act="edit" data-id="${n.id}">Edit</button>
            <button class="btn warn" data-act="delete" data-id="${n.id}">Hapus</button>
            <button class="btn secondary" data-act="toggle" data-id="${n.id}">
              ${n.pinned ? 'Sembunyikan' : 'Tampilkan'}
            </button>
          </td>`;
        tbody.appendChild(tr);
      });
    }

    function renderPinned(){
      if (!pinnedList) return;
      const data = loadNotes().filter(n=>n.pinned).sort((a,b)=>b.updatedAt-a.updatedAt);
      if (!data.length){
        pinnedList.innerHTML = '<p class="muted">Belum ada catatan untuk ditampilkan.</p>';
        return;
      }
      pinnedList.innerHTML = data.map(n => `
        <div class="pinned-card">
          <strong>${escapeHtml(n.title)}</strong><br>
          <span class="muted">${fmt(n.updatedAt)}</span>
          <p style="margin:6px 0 0">${escapeHtml(n.body)}</p>
        </div>
      `).join('');
    }

    function renderAll(){ renderTable(); renderPinned(); }

    // Create / Update
    form?.addEventListener('submit', (e)=>{
      e.preventDefault();
      const id = editingIdEl.value || uid();
      const now = Date.now();
      const data = loadNotes();
      const i = data.findIndex(n=>n.id===id);
      const note = {
        id,
        title: titleEl.value.trim(),
        body: bodyEl.value.trim(),
        pinned: !!pinnedEl.checked,
        createdAt: i>-1 ? data[i].createdAt : now,
        updatedAt: now
      };
      if (!note.title || !note.body){
        alert('Judul dan Isi wajib diisi');
        return;
      }
      if (i>-1) data[i] = note; else data.push(note);
      saveNotes(data);
      clearForm();
      renderAll();
    });

    // Reset form
    resetBtn?.addEventListener('click', clearForm);

    // Delegasi aksi Edit/Hapus/Toggle
    tbody?.addEventListener('click', (e)=>{
      const btn = e.target.closest('button');
      if (!btn) return;
      const id = btn.getAttribute('data-id');
      const act = btn.getAttribute('data-act');
      const data = loadNotes();
      const i = data.findIndex(n=>n.id===id);
      if (i===-1) return;

      if (act==='edit'){
        const n = data[i];
        editingIdEl.value = n.id;
        titleEl.value = n.title;
        bodyEl.value = n.body;
        pinnedEl.checked = !!n.pinned;
        saveBtn.textContent = 'Perbarui';
        titleEl.focus();
      } else if (act==='delete'){
        if (confirm('Hapus catatan ini?')){
          data.splice(i,1);
          saveNotes(data);
          renderAll();
        }
      } else if (act==='toggle'){
        data[i].pinned = !data[i].pinned;
        data[i].updatedAt = Date.now();
        saveNotes(data);
        renderAll();
      }
    });

    function escapeHtml(str){
      return (str||'').replace(/[&<>"']/g, s => ({
        "&":"&amp;","<":"&lt;",">":"&gt;","\"":"&quot;","'":"&#39;"
      }[s]));
    }

    // Render awal
    renderPinned();
    if (getComputedStyle(khusus).display !== 'none'){ renderTable(); }

    // (Opsional) buka modal via keyboard: Alt+L
    window.addEventListener('keydown', (e)=>{
      if (e.altKey && (e.key.toLowerCase() === 'l')) openModal();
    });
  </script>
</body>
</html>
