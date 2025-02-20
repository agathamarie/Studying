const link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = './css/cards.css';
    document.head.appendChild(link);

const nav = () => {
    return `
        <div id="card">

            <button id="buttonSla"><img src="./images/sla.png" width="15" height="15"></button>

        </div>
    `;
};

export default nav;