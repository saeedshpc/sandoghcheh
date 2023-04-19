<?php

namespace App\Enums;

enum Events: string
{
//  This enum should be replace with events later
    case AddExpense = 'تنخواه جدید';
    case EditExpense = 'ویرایش تنخواه';
    case DeleteExpense = 'حذف تنخواه';

    case AddFreelancerCost = 'هزینه جدید فریلنسر';
    case EditFreelancerCost ='ویرایش هزینه فریلنسر';
    case DeleteFreelancerCost = 'حذف هزینه فریلنسر';

    case AddAdvertisingExpense = 'هزینه تبلیغات جدید';
    case EditAdvertisingExpense = 'ویرایش هزینه تبلیغات';
    case DeleteAdvertisingExpense = 'حذف هزینه تبلیغات';

    case AddCompany = 'کسب و کار جدید';
    case EditCompany = 'ویرایش کسب و کار';
    case DeleteCompany = 'حذف کسب و کار';

    case AddBankAccount = 'حساب بانکی جدید';
    case EditBankAccount  = 'ویرایش حساب بانکی';
    case DeleteBankAccount = 'حذف حساب بانکی';

    case AddFreelancer = 'فریلنسر جدید';
    case EditFreelancer = 'ویرایش اطلاعات فریلنسر';
    case DeleteFreelancer = 'حذف فریلنسر';

    case AddIncome = 'درآمد جدید';
    case EditIncome = 'ویرایش درآمد';
    case DeleteIncome = 'حذف درآمد';

    case AddAdvertiser = 'مجری تبلیغات جدید';
    case EditAdvertiser = 'ویرایش اطلاعات مجری تبلیغات';
    case DeleteAdvertiser = 'حذف مجری تبلیغات';

    case AddUser = 'کاربر جدید';
    case EditUser = 'ویرایش کاربر';
    case DeleteUser = 'حذف کاربر';
}
