<template></template>
<script setup>
import { onMounted } from 'vue';
import { useI18n } from 'vue-i18n';

const { t, locale } = useI18n({ useScope: 'global' });

const props = defineProps({
	property: {
		type: String,
		default: 'og:site_name',
	},
	content: {
		type: String,
		default: 'Example.com',
	},
});

const head = document.querySelector('head');
const meta = document.createElement('meta');

onMounted(() => {
	meta.setAttribute('property', props.property);
	meta.setAttribute('content', t(props.content));
	head.appendChild(meta);
});
</script>

<!--
// Required in main.js createI18n(options)
allowComposition: true,
globalInjection: true,
legacy: false,
-->
