import puppeteer from "puppeteer";

const browser = await puppeteer.launch({headless:true});
const page = await browser.newPage();

await page.goto('https://dailyinqilab.com/', {waitUntil: 'load'});

const pdf = await page.pdf({
        size: 'A4',
        //path: 'custom.pdf',
        printBackground: true
    }); 
const buffer = Buffer.from(pdf);
const base64 = buffer.toString('base64');
process.stdout.write(base64)

await browser.close();