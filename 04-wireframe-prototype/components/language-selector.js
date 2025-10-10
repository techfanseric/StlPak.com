function changeLanguage(lang) {
  localStorage.setItem('preferredLanguage', lang);

  const languageMessages = {
    'de': 'Deutsche Version kommt bald! Bitte kontaktieren Sie uns für deutsche Dienstleistungen.',
    'fr': 'Version française à venir! Veuillez nous contacter pour des services en français.',
    'ja': '日本語版はまもなく公開！日本語サービスについてはお問い合わせください。',
    'ko': '한국어 버전 곧 출시! 한국어 서비스는 문의해 주세요.',
    'th': 'เวอร์ชันภาษาไทยเร็วๆ นี้! สำหรับบริการภาษาไทยกรุณาติดต่อเรา'
  };

  alert(languageMessages[lang] || 'Multi-language support coming soon! Please contact us for international service.');
}

// Check language preference on page load
document.addEventListener('DOMContentLoaded', function() {
  const savedLang = localStorage.getItem('preferredLanguage');
  if (savedLang && savedLang !== 'zh') {
    const langSelector = document.querySelector('.language-selector select');
    if (langSelector) {
      langSelector.value = savedLang;
    }
  } else {
    const langSelector = document.querySelector('.language-selector select');
    if (langSelector) {
      langSelector.value = 'en';
    }
  }
});