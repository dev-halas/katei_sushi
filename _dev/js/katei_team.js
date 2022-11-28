const container = document.querySelector('.kateiTeam__employees');
    const katei = container.querySelectorAll('.kateiTeam__emloyee ');

    katei.forEach((katei, index) => katei.addEventListener('click', (e) => {
        const text = document.querySelectorAll('.kateiTeam__employeeText')
        const el = e.currentTarget.children[1].children[2];
        if(el.classList.contains('--open')) {
            el.classList.remove('--open') 
        } else {
            text.forEach(text => {
            text.classList.remove('--open')
        });
        el.classList.toggle('--open') 
    }               
}))