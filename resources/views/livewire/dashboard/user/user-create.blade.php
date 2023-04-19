<div
    class="offcanvas offcanvas-end"
    tabindex="-1"
    id="offcanvasAddUser"
    aria-labelledby="offcanvasAddUserLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Kullanıcı Ekle</h5>
        <button
            type="button"
            class="btn-close text-reset"
            data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0">
        <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
            <div class="form-floating form-floating-outline mb-4">
                <input
                    type="text"
                    class="form-control"
                    id="add-user-fullname"
                    placeholder="John Doe"
                    name="userFullname"
                    aria-label="John Doe"/>
                <label for="add-user-fullname">Adı Soyadı</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
                <input
                    type="text"
                    id="add-user-email"
                    class="form-control"
                    placeholder="furkanbeydemir"
                    aria-label="furkanbeydemir"
                    name="userUsername"/>
                <label for="add-user-username">Kullanıcı Adı</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
                <input
                    type="text"
                    id="add-user-email"
                    class="form-control"
                    placeholder="john.doe@example.com"
                    aria-label="john.doe@example.com"
                    name="userEmail"/>
                <label for="add-user-email">Email</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
                <input
                    type="password"
                    id="add-user-password"
                    class="form-control"
                    placeholder="123456"
                    aria-label="123456"
                    name="userPassword"/>
                <label for="add-user-password">Şifre</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
                <input
                    type="text"
                    id="add-user-prim"
                    class="form-control"
                    placeholder="15"
                    aria-label="15"
                    name="add-user-prim"/>
                <label for="add-user-prim">Prim</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
                <select id="user-role" class="form-select">
                    <option value="agent">Agent</option>
                    <option value="backoffice">Backoffice</option>
                    <option value="muhasebe">Muhasebe</option>
                    <option value="takim-lideri">Takım Lideri</option>
                    <option value="avukat">Avukat</option>
                    <option value="yonetici">Yönetici</option>
                </select>
                <label for="user-role">Rolü</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
                <select id="user-plan" class="form-select">
                    <option value="Erhan Kaya">Erhan Kaya</option>
                    <option value="Erhan Kayas">Erhan Kaya</option>
                </select>
                <label for="user-plan">Team Leader</label>
            </div>
            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Ekle</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Kapat</button>
        </form>
    </div>
</div>

