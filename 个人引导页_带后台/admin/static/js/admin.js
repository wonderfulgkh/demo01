function switchTab(tabId) {
    document.querySelectorAll('.tab-content').forEach(tab => {
        tab.classList.remove('active');
    });
    
    document.getElementById(tabId).classList.add('active');
    
    document.querySelectorAll('.menu-item').forEach(item => {
        item.classList.remove('active');
    });
    
    event.target.classList.add('active');
    
    if (document.getElementById('cacheNotice').style.display === 'block') {
        document.getElementById('cacheNotice').style.display = 'none';
    }

    window.scrollTo(0, 0);
}

function showToast(message, type) {
    const toastContainer = document.getElementById('toastContainer');
    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    
    // 根据类型设置图标
    let icon = '';
    if (type === 'success') {
        icon = '✓';
    } else {
        icon = '✗';
    }
    
    toast.innerHTML = `
        <span class="toast-icon">${icon}</span>
        <span class="toast-message">${message}</span>
        <span class="toast-close" onclick="this.parentElement.classList.add('hide')">&times;</span>
    `;
    
    toastContainer.appendChild(toast);
    
    setTimeout(() => {
        toast.classList.add('show');
    }, 10);
    
    setTimeout(() => {
        toast.classList.remove('show');
        toast.classList.add('hide');
        
        setTimeout(() => {
            toast.remove();
        }, 300);
    }, 3000);
}

function saveTabContent(tabId) {
    const formData = new FormData();
    const form = document.getElementById(tabId.replace('-settings', 'Form'));
    
    // 收集所有表单数据，包括select
    form.querySelectorAll('input, select, textarea').forEach(element => {
        if (element.type !== 'button' && element.type !== 'submit') {
            formData.append(element.name, element.value);
        }
    });
    
    formData.append('update_config', '1');
    
    fetch('index.php', {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            showToast(data.message, 'success');
             // 滚动到顶部（添加这行）
            window.scrollTo({ top: 0, behavior: 'smooth' });
            document.getElementById('cacheNotice').style.display = 'block';
        } else {
            showToast(data.message, 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showToast('保存失败', 'error');
    });
}

function validateAccountForm() {
    const username = document.getElementById('new_username').value;
    const password = document.getElementById('new_password').value;
    const confirmPassword = document.getElementById('confirm_password').value;
    
    if (!username) {
        showToast('请输入新用户名', 'error');
        return false;
    }
    
    if (!password) {
        showToast('请输入新密码', 'error');
        return false;
    }
    
    if (password.length < 3) {
        showToast('密码长度必须至少3个字符', 'error');
        return false;
    }
    
    if (password !== confirmPassword) {
        showToast('两次输入的密码不一致', 'error');
        return false;
    }
    
    return true;
}
function checkPasswordMatch() {
    const password = document.getElementById('new_password').value;
    const confirmPassword = document.getElementById('confirm_password').value;
    const mismatchElement = document.getElementById('passwordMismatch');
    
    if (password && confirmPassword && password !== confirmPassword) {
        mismatchElement.style.display = 'block';
    } else {
        mismatchElement.style.display = 'none';
    }
}

function checkPasswordStrength() {
    const password = document.getElementById('new_password').value;
    const strengthElement = document.getElementById('passwordStrength');
    
    if (!password) {
        strengthElement.textContent = '';
        return;
    }
    
    let strength = 0;
    if (password.length >= 3) strength++;
    if (password.length >= 6) strength++;
    if (/[A-Z]/.test(password)) strength++;
    if (/[0-9]/.test(password)) strength++;
    if (/[^A-Za-z0-9]/.test(password)) strength++;
    
    let strengthText = '';
    let strengthClass = '';
    
    if (password.length < 3) {
        strengthText = '密码太短（至少3个字符）';
        strengthClass = 'password-weak';
    } else if (strength <= 2) {
        strengthText = '弱';
        strengthClass = 'password-weak';
    } else if (strength <= 4) {
        strengthText = '中';
        strengthClass = 'password-medium';
    } else {
        strengthText = '强';
        strengthClass = 'password-strong';
    }
    
    strengthElement.textContent = `密码强度: ${strengthText}`;
    strengthElement.className = `password-strength ${strengthClass}`;
}


