function callOrMessage() {
	// Vérifiez si le navigateur prend en charge les appels téléphoniques
	if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
		window.location.href = 'tel:+33620606243';
	} else {
		// Si le navigateur ne prend pas en charge les appels téléphoniques, affichez une boîte de dialogue pour proposer d'envoyer un message
		const isConfirmed = confirm(
			'Vous semblez etre sur un ordinateur, voulez-vous envoyer un message au +33 6 20 60 62 43 ?'
		);
		if (isConfirmed) {
			const link = document.createElement('a');
			link.href = 'tel:+33620606243';
			link.click();
		}
	}
}
