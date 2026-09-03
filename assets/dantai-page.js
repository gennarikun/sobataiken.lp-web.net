/* dantai-page.js — houtoutaiken common.js から launch ページ使用関数だけ抽出 (2026-09-03 mirror-jp-page・jcc premium-page.js 実証済み抽出を流用) */
window.openPlanModal = function(card) {
    var name = card.dataset.planName;
    var price = card.dataset.planPrice;
    var badge = card.dataset.planBadge || '';
    var badgeClass = card.dataset.planBadgeClass || 'takeout';
    var includes = JSON.parse(card.dataset.planIncludes || '[]');
    var href = card.dataset.planHref || '../contact/';
    var modal = document.getElementById('planModal');
    if (!modal) return;
    var badgeEl = document.getElementById('planModalBadge');
    badgeEl.textContent = badge;
    badgeEl.className = 'plan-badge ' + badgeClass;
    badgeEl.style.display = badge ? '' : 'none';
    document.getElementById('planModalName').textContent = name;
    document.getElementById('planModalPrice').textContent = price;
    var list = document.getElementById('planModalList');
    list.innerHTML = includes.map(function(item) {
      var cls = /^※アレルギー/.test(item) ? ' class="plan-modal-allergen"' : '';
      return '<li' + cls + '>' + item + '</li>';
    }).join('');
    document.getElementById('planModalCta').href = href;
    var imgEl = document.getElementById('planModalImg');
    if (imgEl) {
      var cardImg = card.querySelector('img');
      imgEl.src = cardImg ? cardImg.src : '';
      imgEl.alt = cardImg ? cardImg.alt : '';
      imgEl.style.display = imgEl.src ? '' : 'none';
    }
    var noteEl = document.getElementById('planModalNote');
    if (noteEl) {
      var note = card.dataset.planNote || '';
      noteEl.textContent = note;
      noteEl.style.display = note ? '' : 'none';
    }
    var videoBtn = document.getElementById('planModalVideoBtn');
    if (videoBtn) {
      var videoSrc = card.dataset.video || '';
      videoBtn.style.display = videoSrc ? '' : 'none';
      if (videoSrc) videoBtn.setAttribute('data-video-src', videoSrc);
    }
    modal.classList.add('open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  };

window.closePlanModal = function() {
    var modal = document.getElementById('planModal');
    if (!modal) return;
    modal.classList.remove('open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  };

window.openVideoModal = function(videoSrc) {
    var modal = document.getElementById('videoModal');
    var player = document.getElementById('videoModalPlayer');
    if (!modal || !player) return;
    player.src = videoSrc;
    modal.classList.add('open');
    document.body.style.overflow = 'hidden';
    player.load();
    player.play();
  };

window.closeVideoModal = function() {
    var modal = document.getElementById('videoModal');
    var player = document.getElementById('videoModalPlayer');
    if (!modal) return;
    modal.classList.remove('open');
    if (player) { player.pause(); player.src = ''; }
    document.body.style.overflow = '';
  };

/* plan-card クリック → openPlanModal bind (common.js 相当) */
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.plan-card[data-plan-name]').forEach(function(card) {
    card.addEventListener('click', function(e) {
      if (e.target.closest('.btn-video-plan')) return;
      window.openPlanModal(card);
    });
    card.addEventListener('keydown', function(e) {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); window.openPlanModal(card); }
    });
  });
});
