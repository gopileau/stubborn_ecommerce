const puppeteer = require('puppeteer');

async function generatePDF(url, output) {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    await page.goto(url);
    await page.pdf({ path: output });
    await browser.close();
}

generatePDF('http://localhost:3000/api-docs', 'documentation.md')
    .then(() => console.log('Documentation PDF générée avec succès!'))
    .catch(err => console.error(err));
