<template></template>
<script setup>
import { onMounted } from 'vue';

const props = defineProps({
	json: {
		type: [Array, Object],
		default: [],
	},
});

const head = document.querySelector('head');
const el = document.createElement('script');

onMounted(() => {
	el.setAttribute('type', 'application/ld+json');
	el.setAttribute('id', 'structured-data');
	el.innerText = JSON.stringify(props.json);
	head.appendChild(el);
});

function getSchemaObject(id = '#structured-data') {
	let el = document.querySelector(id);
	let obj = JSON.parse(el.innerText);
	return obj;
}
</script>
